<?php
include_once 'vpb_converter.js';
include_once 'vpb_converter.php';
include_once 'ConnectAndQuery.php';
$connect = new ConnectAndQuery();
$conn=$connect->setConnect();
mysqli_query($conn,"TRUNCATE TABLE rate");
$connect->GetFromXML($conn);
$result=mysqli_query($conn,"SELECT name FROM rate");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Currency Converter</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <center>
            <div align="center" style="width:1000px;">
                
                <div style="float:left; width:590px;">&nbsp;

<!-- Currency Conversion Form Starts Here -->
                    <center>
                        <div id="" style=" padding:20px;padding-left:50px;padding-right:50px;width:500px;box-shadow: 0 2px 15px #666666;-moz-box-shadow: 0 2px 15px #666666;-webkit-box-shadow: 0 2px 15px #666666;-webkit-border-radius: 15px 15px; 15px 15px;-moz-border-radius: 15px 15px; 15px 15px;border-radius: 15px 15px; 15px 15px;" align="center">
                            
                            <br clear="all" />
                            <br clear="all" />
                            
                            <script type="text/javascript">
                                            function loadXMLDoc()
                                                {
                                                    var xmlhttp;
                                                    if (window.XMLHttpRequest)
                                                    {
                                                        xmlhttp = new XMLHttpRequest();
                                                    }
                                                    else
                                                    {
                                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                    }
                                                    
                                                    xmlhttp.open("POST","vpb_converter.php",true);
                                                    xmlhttp.send()  
                                                }
                                    </script>

                            <form id="form" method="post" action="">
                                <div style="width:450px; font-family:Verdana, Geneva, sans-serif; font-size:12px;" align="left">

                                    <div style="width:110px;float:left; padding-top:7px;" align="left">Price:</div>
                                    
                                    <div style="width:300px; float:left;" align="left">
                                        <input type="text" class="form-control" id="amount" name="amount">
                                        
                                    </div>
                                    <br clear="all" />
                                    <br clear="all" />
                                    <br clear="all" />


                                    <div style="width:110px;float:left;padding-top:2px;" align="left">From Currency:</div>
                                    
                                    <div style="width:300px; float:left;" align="left">
                                        <select id="from_currency" class="form-select" aria-label="Пример выбора по умолчанию">
                                            <?php foreach ($result as $row) { ?>
                                            <option><?php echo $row['name']?></option>
                                            <?php } ?>
                                        </select>
                                        
                                    </div>
                                    
                                    <br clear="all" />
                                    <br clear="all" />
                                    <br clear="all" />

                                    <div style="width:110px;float:left;padding-top:2px;" align="left">To Currency:</div>
                                    
                                    <div style="width:300px; float:left;" align="left">
                                        <select id="to_currency" class="form-select" aria-label="Пример выбора по умолчанию">
                                            <?php foreach ($result as $row) { ?>
                                            <option><?php echo $row['name']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <br clear="all" />
                                    <br clear="all" />

                                    <div id="vpb_conversion_result" align="left"></div>
                                    <!-- This div displays the conversion result from the JS Code -->
                                    <br clear="all" />
                                    <br clear="all" />

                                    <div style="width:110px;float:left;" align="left">&nbsp;</div>
                                    
                                    <div style="width:300px; float:left;" align="left">
                                        
                                        <p><a href="#" class="link-underline-dark fs-3" id="convert" onclick="loadXMLDoc()">Convert</a></p>
                                        
                                        
                                        <a href="javascript:void(0);" class="vpb_buttoned" style="display:none; font-style:italic;" id="converting">Converting...</a>
                                        
                                    </div>
                                        
                                    
                                    <br clear="all" />
                                    <br clear="all" />

                                </div>
                            </form>		

                        </div>
                        <br clear="all" />
                        <br clear="all" />
                    </center> 
                    <!-- Currency Conversion Form Ends Here -->

                </div>
                <div style="float:left; width:400px;" align="left">
                    
                    <br clear="all" />
                    <br clear="all" />
                    <br clear="all" />
                    <br clear="all" />
                </div>
                
                <br clear="all" />

            </div>
            
        </center>
        
        <p style="padding-bottom:290px;">&nbsp;</p>

    </body>
</html>
