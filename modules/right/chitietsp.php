<?php
	$id = $_GET[id];
	$a->chitietsp_query($id);
?>
	
     			
              		<div class="tabs_panel">
                    	<ul class="tabs">
                        	<li rel="panel1" class="active">Thông tin </li>
                            <li rel="panel2">Hình ảnh</li>
                            <li rel="panel3">Đánh giá</li>
                        </ul>
                        <?php
					$a->chitietsp_query_ttin_hinh($id);
						?>
                        </div>
                        
                          <div id="panel3" class="panel">
                        	<p>Mang khá êm chân</p>
                        
                        </div>
                    
                    </div>
                   <?php
				   $a->chitietsp_splienquan($id);
			?>
            <div class="clear"></div>
          
           