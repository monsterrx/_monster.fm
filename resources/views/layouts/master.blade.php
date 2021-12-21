<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.css')
    @include('components.meta', [
        'title' => 'Home',
        'social_title' => 'Monster FM',
        'social_image' => 'http://monster.fm/img/headers/RX93.1-2020.jpg',
        'social_description' => 'Audiovisual Communicators Incorporated (ACI) is a Philippine broadcast media corporation that presently owns and operates five FM radio stations. The flagship station is DWRX (93.1 MHz), based in Metro Manila. It broadcasts under the name Monster RX93.1 (tagged as “Manila’s Hottest”). Monster RX93.1 is one of the top-rated CHR (contemporary hit radio) stations in Manila. It is generally regarded as the most acclaimed and awarded pop station in the Philippines. ACI operates several provincial stations that continue its thrust of entertaining audiences with the finest youth-oriented programming. They are DYBT (Monster Radio BT105.9 in Cebu City), DXBT (Monster Radio BT99.5 in Davao City), DXEZ (Monster Radio EZ88.7 in General Santos City), and DXRX (Monster RX93.1 in Zamboanga City).',
        'social_url' => action('HomeController@index'),
        'description' => 'Audiovisual Communicators Incorporated (ACI) is a Philippine broadcast media corporation that presently owns and operates five FM radio stations. The flagship station is DWRX (93.1 MHz), based in Metro Manila. It broadcasts under the name Monster RX93.1 (tagged as “Manila’s Hottest”). Monster RX93.1 is one of the top-rated CHR (contemporary hit radio) stations in Manila. It is generally regarded as the most acclaimed and awarded pop station in the Philippines. ACI operates several provincial stations that continue its thrust of entertaining audiences with the finest youth-oriented programming. They are DYBT (Monster Radio BT105.9 in Cebu City), DXBT (Monster Radio BT99.5 in Davao City), DXEZ (Monster Radio EZ88.7 in General Santos City), and DXRX (Monster RX93.1 in Zamboanga City).'
    ])
</head>
<body>
    @yield('content')
    @include('components.js')
</body>
</html>