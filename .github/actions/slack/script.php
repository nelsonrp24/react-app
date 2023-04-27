<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

echo "::debug::Senging a request to slack\n";


$response = Requests::post(
    $_ENV['INPUT_SLACK_WEBHOOK'],
    array(
        'Content-type' => 'applicatioin/json'
    ),
    #json_encode(array(
    #    'text' => 'Some Message from PHP'
    #))

    json_encode(array (
        'blocks' => 
        array (
          0 => 
          array (
            'type' => 'section',
            'text' => 
            array (
              'type' => 'mrkdwn',
              'text' => $_ENV['INPUT_MESSAGE'],
            ),
          ),
          1 => 
          array (
            'type' => 'section',
            'fields' => 
            array (
              0 => 
              array (
                'type' => 'mrkdwn',
                'text' => "*Repository:{$_ENV['GITHUB_REPOSITORY']}",
              ),
              1 => 
              array (
                'type' => 'mrkdwn',
                'text' => "*Event:* {$_ENV['GITHUB_EVENT_NAME']}",
              ),
              2 => 
              array (
                'type' => 'mrkdwn',
                'text' => "*Ref:*{$_ENV['GITHUB_HEAD_REF']}",
              ),
              3 => 
              array (
                'type' => 'mrkdwn',
                'text' => "*SHA:*{$_ENV['GITHUB_SHA']}",
              ),
              4 => 
              array (
                'type' => 'mrkdwn',
                'text' => "*Ref Name:*{$_ENV['GITHUB_REF_NAME']}",
              ),
            ),
          ),
        ),
      ))

);

echo "::group::Slack Response\n";

var_dump($response);

echo "::endgroup::\n";

if(!$response->success) {
    echo $response->body;
    exit(1);
}