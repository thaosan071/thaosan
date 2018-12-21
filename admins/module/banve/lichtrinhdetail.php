<?php
//return $this->exeQuery("select * from news");
$chitietlichtrinh = new ChiTietLichTrinh();
$tau = new Tau();
$ga = new Ga();
$tuyen = new Tuyen();
$id = Utils::getIndex("id");
$data = $chitietlichtrinh->getAllById($id);
$datalt= $lichtrinh->getById($id);

?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
						
						<table>
							
							<thead>
								<tr>
									<th>Mã lịch trình: <?php echo $datalt["maLT"]?></th>
								</tr>
								<tr>
									<th>Tuyến:
										<?php
											$datatuyen= $tuyen->getById($datalt["maT"]);
											echo $datatuyen['TenT'];
										?>
									</th>
								</tr>
								<tr>
									<th>Ngày đi: <?php echo $datalt["ngaydi"];?>&nbsp;&nbsp;&nbsp;&nbsp;Giờ đi: <?php echo $datalt["giodi"];?></th>
								</tr>
								<tr>
									<th>Ngày đến: <?php echo $datalt["ngayden"];?>&nbsp;&nbsp;&nbsp;&nbsp;Giờ đến: <?php echo $datalt["gioden"];?></th>
								</tr>
								<tr>
									<th>Tàu: <?php 
									$datatau = $tau->getById($datalt["matau"]); 
									echo $datatau["tentau"];?></th>
								</tr>
								<tr>
								   <th>Tên ga</th>
								   <th>Giờ đến</th>
								   <th>Giờ đi</th>
								</tr>
								
							</thead>
						 
													 
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
										<?php echo $r["gioden"]; ?>
                                	</td>
                                	<td>
                                		<?php echo $r["giodi"]; ?>
                                	</td>
   
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->