<!-- Technical Test MAGANG PT. GITS Indonesia

Nama    : Desi Riawan Nuti 
Kampus  : STT Mandala Bandung
-->


<!DOCTYPE html>
<html>
<head>
     <title>Reverse</title>
</head>
<body>

<pre>
Masukan kata/kalimat <input type="text" id="teks"><br/> </td>
<input type="button" onclick="reverse()" value="Balik tulisan"><br/> 
Hasil <input type="text" id="hasil"> </pre>

<link rel="stylesheet" type="text/css" href="">

<script type="text/javascript">
     function reverse(){
           x=document.getElementById('teks').value;
           var hsl,p;
           hsl="";
           p=x.length;
           for(a=p-1;a>=0;a--){
                hsl=hsl+x.charAt(a);
           }
           document.getElementById('hasil').value=hsl;
     }
</script>
</body> 
</html>