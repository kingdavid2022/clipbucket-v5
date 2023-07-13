<?php
require_once '../includes/admin_config.php';
require_once('../includes/classes/admin_tool.class.php');
global $userquery;

$userquery->admin_login_check();

AdminTool::sendClientResponseAndContinue(function () {
    AdminTool::setToolInProgress($_POST['id_tool']);
    echo json_encode([
        'msg'              => getTemplateMsg()
        , 'libelle_status' => lang('in_progress')
    ]);
});

AdminTool::launch($_POST['id_tool']);