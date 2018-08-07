      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <link rel="stylesheet" href="<?php echo base_url();?>css/themes/jquery.ui.all.css" type="text/css" />
  	<script>
	$(document).ready(function() {
			$( ".datepicker" ).datepicker();
	});

	function save(){
		$.ajax({
			url:'<?php echo base_url(); ?>satuan/act/',
			type:'POST',
			data:$('#form_barang').serialize(),
			success:function(data){
			  	if(data!=''){
					 $( "#infodlg" ).html(data);
					 $( "#infodlg" ).dialog({ title:"Info...", draggable: false});
				} else {
					 window.location="<?php echo base_url() ?>satuan/listSatuan";
				}
			 }
		});
	}
	function confirmdlg(){
					$("#confirm").dialog({
					 resizable: false,
					 modal: true,
					 title:"Info...",
					 draggable: false,
					 width: 'auto',
					 height: 'auto',
					 buttons: {
					 "Ya": function(){
						 save();
						  $(this).dialog("close");
					  },
					  "Tutup": function(){
						   $(this).dialog("close");
						}
					 }
				  });

			}

	</script>

  <div class="ibox-content">
    <form method="post" class="form1" action="<?php echo base_url(); ?>satuan/act/" id="form_barang" name="form_barang"/>
      <table>
        <tr>
          <td><input type="hidden" name="id" maxlength="5" size="5"  hidden value="<?php echo $id; ?>"/></td>
        </tr>
        <tr>
          <td>ID Barang </td>
          <td><input type="text" name="id_satuan" maxlength="5" size="5"    value="<?php echo isset($infouser['id_satuan']) ? $infouser['id_satuan'] : ''; ?> "/>
            *</td>
        </tr>
        <tr>
          <td>Nama Sediaan </td>
          <td><input type="text" name="sediaan" maxlength="25" value="<?php echo isset($infouser['sediaan']) ? $infouser['sediaan'] : ''; ?>" />
            *</td>
        </tr>

        <tr>
          <td><button class="btn btn-sm btn-white" type="submit">Submit</button><a style="margin-bottom:5px;" href="<?php echo base_url() ?>satuan/listSatuan" class="dark_blue btn">Kembali</a></td>
        </tr>
    </table>
    </form>
  </div>

 <div id="confirm" style="display:none"> Anda Ingin Meyimpan data ini</div>
