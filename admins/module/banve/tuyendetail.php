<?php
//return $this->exeQuery("select * from news");
$chitiettuyen = new ChiTietTuyen();
$ga = new Ga();
$id = Utils::getIndex("id");
$data = $chitiettuyen->getAllById($id);
$data2 = $tuyen->getById($id);

?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
						
						<table>
							
							<thead>
								<tr>
									<th><?php echo $data2["TenT"]?></th>
								</tr>
								<tr>
								   <th>Tên ga</th>
								   <th>Vị trí</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								
							</tfoot>
						 
							<tbody>
                            <?php 
							foreach( $data as $r)
							{?>
								<tr>
									<td>
										<?php $maga= $r["maga"];
											$data3= $ga->getById($maga);
											echo $data3["tenga"];
										?>
                                    </td>
									<td>
										<?php  
											if ($r["vitri"]==-1) {
												echo "Ga đi";
											}
											if ($r["vitri"]==0) {
												echo "Ga đến";
											}
											if ($r["vitri"]==1) {
												echo "Ga trung gian";
											}
										?>
                                	</td>
   
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->