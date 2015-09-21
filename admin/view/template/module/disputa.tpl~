<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
<div class="breadcrumb">
  <?php foreach ($breadcrumbs as $breadcrumb) { ?>
  <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
  <?php } ?>
</div>
<?php if ($error_warning) { ?>
<div class="warning"><?php echo $error_warning; ?></div>
<?php } ?>
<div class="panel panel-default">
<div class="panel-heading">
  <div class="heading">
    <h3 class="panel-title"><?php echo $heading_title; ?></h1>
  </div>
  <div class="panel-body">
    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
      <table id="module" class="table">
        <thead>
          <tr>
            <td class="left"><?php echo $entry_url; ?></td>
	    <td class="left"><?php echo $entry_valor; ?></td>
	    <td class="left"><?php echo $entry_usuario; ?></td>
            <td class="left"><?php echo $entry_email; ?></td>
            <td class="left"><?php echo $entry_datahora; ?></td>
          </tr>
        </thead>
        <?php $module_row = 0; ?>
        <?php foreach ($data as $user) { ?>
        <tbody >
          <tr>
            <td class="left"><?php echo $user['url']; ?></td>
	    <td class="left"><?php echo $user['valor']; ?></td>
            <td class="left"><?php echo $user['usuario']; ?></td>
	    <td class="left"><?php echo $user['email'];?></td>
            <td class="left"><?php echo $user['datahora']; ?></td>
          </tr>
        </tbody>
        <?php $module_row++; ?>
        <?php } ?>
      </table>
    </form>
  </div>
</div>
</div>
<script type="text/javascript"><!--
var module_row = <?php echo $module_row; ?>;

function addModule() {	
	html  = '<tbody id="module-row' + module_row + '">';
	html += '  <tr>';
	html += '    <td class="left"><select name="disputa_module[' + module_row + '][layout_id]">';
	<?php foreach ($layouts as $layout) { ?>
	html += '      <option value="<?php echo $layout['layout_id']; ?>"><?php echo $layout['name']; ?></option>';
	<?php } ?>
	html += '    </select></td>';
	html += '    <td class="left"><select name="disputa_module[' + module_row + '][position]">';
	html += '      <option value="content_top"><?php echo $text_content_top; ?></option>';
	html += '      <option value="content_bottom"><?php echo $text_content_bottom; ?></option>';
	html += '      <option value="column_left"><?php echo $text_column_left; ?></option>';
	html += '      <option value="column_right"><?php echo $text_column_right; ?></option>';
	html += '    </select></td>';
	html += '    <td class="left"><select name="disputa_module[' + module_row + '][status]">';
    html += '      <option value="1" selected="selected"><?php echo $text_enabled; ?></option>';
    html += '      <option value="0"><?php echo $text_disabled; ?></option>';
    html += '    </select></td>';
	html += '    <td class="right"><input type="text" name="disputa_module[' + module_row + '][sort_order]" value="" size="3" /></td>';
	html += '    <td class="left"><a onclick="$(\'#module-row' + module_row + '\').remove();" class="button"><span><?php echo $button_remove; ?></span></a></td>';
	html += '  </tr>';
	html += '</tbody>';
	
	$('#module tfoot').before(html);
	
	module_row++;
}
//--></script>
<?php echo $footer; ?>
