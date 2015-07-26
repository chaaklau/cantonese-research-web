<html><head>
<TITLE>研究目录索引</TITLE>
<!-- by: bernard@bernardtsang.com -->

<META content="text/html; charset=gb2312" http-equiv=Content-Type>
<LINK REL="stylesheet" HREF="style.css" TYPE="text/css">
</head>

<body SPACING="0" marginheight="0" marginwidth="0" topmargin="0" leftmargin="0">

<table border="0" cellpadding="0" cellspacing="0" width="585">
  <tr> 
    <td width="7"></td>
    <td width="577">                                <img width=577 src=pic/landscape1.gif><table border=0 cellspacing=0 cellpadding=0 width="100%" bgcolor="#d40000"><tr><td><img src="t.gif" width="1" height="1"></td></tr>
      </table>
      <table width=100% cellspacing=0 cellpadding=0 border=0>
        <tr> 
          <td width=400 valign=top><br> 
            <H1 align=left>研究目录索引</H1> 


            <table width=95% cellspacing=0 cellpadding=1 border=0>
              <tr> 
                  <td>


<?php
   $link = mysql_connect("localhost:3306", "cantones", "LingCant")
          or die("Could not connect");
   mysql_select_db("linguistics", $link) or die("Could not select database");

   $query = "SELECT author_gb,title_gb,source_gb,year,rem_gb FROM CantPubl_GB WHERE publid=${id}";

   $result = mysql_query($query) or die("Query failed");

   print "<table width=378 cellpadding=3 cellspacing=1>\n";
   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	printf ("\t<TR valign=top><TD width=58 bgcolor=#000000><font class=whi>著者</font></td><td width=319 bgcolor=#f0f0f0>%s</td></TR>\n", $row["author_gb"]);
	printf ("\t<TR valign=top><TD bgcolor=#000000><font class=whi>编名</font></td><td bgcolor=#f0f0f0>%s</td></TR>\n", $row["title_gb"]);
	printf ("\t<TR valign=top><TD bgcolor=#000000><font class=whi>出处</font></td><td bgcolor=#f0f0f0>%s</td></TR>\n", $row["source_gb"]);
	printf ("\t<TR valign=top><TD bgcolor=#000000><font class=whi>出版年份</font></td><td bgcolor=#f0f0f0>%s</td></TR>\n", $row["year"]);
	printf ("\t<TR valign=top><TD bgcolor=#000000><font class=whi>备注</font></td><td bgcolor=#f0f0f0>%s</td></TR>\n", $row["rem_gb"]);
   }
   print "</table>\n";

   /* Free resultset */
   mysql_free_result($result);

   /* Closing connection */
   mysql_close($link);
?>


                  </td>
              </tr>
             
            </table>
            <br>  
          </td>
          <td width=1><img src="t.gif" width=1 height=1></td>
          <td width=177 valign=top > 
            <table border=0 cellspacing=0 cellpadding=3 width="100%">
              <tr> 
                <td valign="top" align=right><img src="pic/right1.jpg" border=0 ></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
    <td width="1" rowspan=3 bgcolor=d40000><img src="t.gif" width=1 height=1></td>
  </tr>
  <tr> 
    <td width="7"></td>
    <td align=center valign="center">&nbsp;</td>
  
  </tr>
</table>

</body></html>
