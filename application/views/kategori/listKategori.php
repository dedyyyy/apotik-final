
 <div id="tabledata">

<div class="span12">
 <a style="margin-bottom:5px;" href="<?php echo base_url() ?>kategori/form/" class="dark_green btn">Tambah Data Kategori</a>
											<div class="well grey">
												<div class="well-header">
													<h5>List Kategori </h5>
													</div>
													<div class="well-content">
													<div class="table_options top_options">
													</div>

 <table class="table multimedia table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>ID Kategori</td>
                                            <td>Satuan </td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
									 	<?php  if(!empty($query)) { foreach($query as $row) { ?>
                                        <tr>
                                            <td style="text-align:center;font-weight:bold">
											<span class="label label-warning"><?php echo $row->id_kategori ?></span>
											</td>

                                            <td><?php echo $row->kategori ?></td>

                                            <td>
                                                <div class="btn-group">

                                                    <a class="btn" href="<?php echo base_url().'kategori/form/'.$row->id ?>">
																											<i class="fa fa-edit"></i>
																										</a>
                                                    <a class="btn" href="<?php echo base_url().'kategori/delete/'.$row->id ?>"><i class="fa fa-trash"></i></a>
																									</div>
																						</td>
                                        </tr>

										</tr>
										<?php }} ?>
                                    </tbody>
                                </table><br>
								 <p class="pages"> <?php echo $this->pagination->create_links(); ?></p>
								 </div>

								 <div class="table_options bottom_options">
													</div>
											  </div>
											</div>
										</div>
