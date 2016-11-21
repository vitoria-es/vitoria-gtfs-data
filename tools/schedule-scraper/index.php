<?php namespace Scraper;

require __DIR__ . '/vendor/autoload.php';

$client = new \Goutte\Client();
$route_numbers = ['0010', '0015', '0022', '0031', '031A', '0044', '0051', '0052', '0071', '0072', '073N', '073S', '0074', '100A', '100B', '0100', '0102', '0103', '0104', '0110', '0111', '0112', '0121', '0122', '0123', '0124', '0125', '0130', '0151', '0160', '0161', '0163', '0164', '0171', '0172', '0173', '0175', '0181', '0182', '0184', '0200', '0201', '0202', '0203', '0204', '0210', '0211', '0212', '0213', '0214', '0241', '0290', '0300', '0302', '0310', '0331', '0333', '333E', '0370'];
$baseUrl = 'http://sistemas.vitoria.es.gov.br/redeiti/listarHorario.cfm?cdLinha=';

$schedules = [
    'routes' => []
];

function dd($expression) {
    die('<pre>'.var_export($expression, true).'</pre>');
}

function get_routes_times($route_numbers) {
    global $client, $baseUrl;

    $routes = [];

    foreach ($route_numbers as $key => $number) {
        $crawler = $client->request('GET', $baseUrl.$number);

        $route = [
            'number' => $number,
            'schedule' => []
        ];

        $route['schedule'] = $crawler->filter('div.body > div.main > div.line')->each(function ($node) {
            $table = [
                'label' => $node->filter('div.data thead th')->text(),
                'times' => []
            ];
            $table['times'][] = $node->filter('div.data tbody td')->each(function ($node) {
                return $node->text();
            });
            return $table;
        });

        $routes[$key] = $route;

        if ($key == 1) {
            break;
        }
    }

    return $routes;
}

$schedules['routes'] = get_routes_times($route_numbers);

dd($schedules);
