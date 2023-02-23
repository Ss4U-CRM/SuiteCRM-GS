<?php
$module_name = 'GoogleForm';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' =>
            array (
                'buttons' =>
                    array (
                        0 => array (
                            'customCode' => '<input id="SAVE_HEADER" class="button primary" type="submit" value="Sync" name="button" onclick="var _form = document.getElementById(\'EditView\'); _form.action.value=\'Save\'; if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(_form);return false;" accesskey="a" title="Save">'
                        ),
                        1=> 'CANCEL',
                    ),
            ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'g_sheet_id',
            'label' => 'LBL_G_SHEET_ID',
          ),
          1 => 
          array (
            'name' => 'g_sheet_name',
            'label' => 'LBL_G_SHEET_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
