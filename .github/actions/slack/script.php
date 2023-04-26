<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);

// $response = Requests::post(
//     "https://hooks.slack.com/services/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",
//     array(
//         'Content-type' => 'applicatioin/json'
//     ),
//     #json_encode(array(
//     #    'text' => 'Some Message from PHP'
//     #))

//     json_encode(array (
//         'blocks' => 
//         array (
//           0 => 
//           array (
//             'type' => 'section',
//             'text' => 
//             array (
//               'type' => 'mrkdwn',
//               'text' => 'You have a new request:
//       *<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*',
//             ),
//           ),
//           1 => 
//           array (
//             'type' => 'section',
//             'fields' => 
//             array (
//               0 => 
//               array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Type:*
//       Computer (laptop)',
//               ),
//               1 => 
//               array (
//                 'type' => 'mrkdwn',
//                 'text' => '*When:*
//       Submitted Aut 10',
//               ),
//               2 => 
//               array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Last Update:*
//       Mar 10, 2015 (3 years, 5 months)',
//               ),
//               3 => 
//               array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Reason:*
//       All vowel keys aren\'t working.',
//               ),
//               4 => 
//               array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Specs:*
//       "Cheetah Pro 15" - Fast, really fast"',
//               ),
//             ),
//           ),
//         ),
//       ))

// );

// var_dump($response);

// if(!$response->success) {
//     echo $response->body;
// }