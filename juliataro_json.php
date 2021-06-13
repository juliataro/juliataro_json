<?php
/*
* Plugin Name: juliataro_json
* Description: This plugin prints customers from JSON link with shortcode
* Version:     1.0.0
* Author:      Julia Taro
* Author URI:  https://http://yuliataro.ikt.khk.ee
* Text Domain: hello-world
* License:     GPL v2 or later

*/

function customers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    $customers = json_decode($data);

    foreach ($customers as $customer){

    }

    ?>
    <table>
        <tbody>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>City</th>
        </tr>
        <?php foreach ($customers as $customer) : ?>
            <tr>
                <td><?php echo $customer->name; ?> </td>
                <td><?php echo $customer->email; ?> </td>
                <td><?php echo $customer->address->city; ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <?php
}
add_shortcode('kontrollime','customers');