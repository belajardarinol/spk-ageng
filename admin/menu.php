<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPK Ageng</title>
</head>

<body>
 <div class="breadLine">            
            <div class="arrow"></div>
            <div class="adminControl active">
                <?php echo "Hallo,$_SESSION[namalengkap]"; ?>
            </div>
        </div>
        
        <div class="admin">
            <div class="image">
                <img src="img/users/aqvatarius.jpg" class="img-polaroid"/>                
            </div>
            <ul class="control"> 
                <li><span class="icon-user"></span> <?php echo "Hallo, $_SESSION[namalengkap]"; ?></li>               
                <li><span class="icon-share-alt"></span> <a href="logout.php">Logout</a></li>

            </ul>
        </div>
        
        <ul class="navigation">            
            <li class="active">
                <a href="?p=home">
                    <span class="isw-grid"></span><span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="?menu=makanan&act=view">
                    <span class="isw-list"></span><span class="text">Input Data Makanan</span>
                </a>
            </li> <li>
                <a href="?menu=input">
                    <span class="isw-list"></span><span class="text">Input Nilai Makanan</span>
                </a>
            </li> 
            <li>
                <a href="?menu=gap">
                    <span class="isw-archive"></span><span class="text">Perhitungan GAP & Komulatif</span>                 
                </a>
                
            </li>                        
            <li>
                <a href="?menu=bobot">
                    <span class="isw-chat"></span><span class="text">Bobot Penilaian</span>
                </a>
            </li>
			            <li>
                        <a href="?menu=hasil">
                            <span class="isw-list"></span><span class="text">Hasil Nilai CF dan SF</span>
                        </a>                  
                    </li>   
					
					<li>
                        <a href="?menu=hasilakhir">
                            <span class="isw-refresh"></span><span class="text">Hasil Akhir</span>
                        </a>
                    </li>              
           <li>
                        <a href="?menu=hasil2">
                            <span class="isw-list"></span><span class="text">Laporan Hasil Pemilihan Makanan  </span>
                        </a>                  
                    </li>    
					<!-- <li>
                        <a href="?menu=laporan_makanan&act=view">
                            <span class="isw-list"></span><span class="text">Laporan Data Makanan  </span>
                        </a>                  
                    </li>                         -->
        </ul>
        Ageng-SPK
</body>
</html>