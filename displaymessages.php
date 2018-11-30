<table>
    <tr>
    </tr>
<tbody id="data">

<script>

setInterval(function() { yeet() },1);


function yeet() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "data.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            var data = JSON.parse(this.responseText);
           console.log(data);
           var html = "";
           for (var a = 0; a < data.length; a++){
               




               var name = data[a].name;
               var message = data[a].message;
               var time = data[a].time;
               html += "<tr>";
                   html += "<td>" + name + "</td>";
                   html += "<td>" + message + "</td>";
                   html += "<td>" + time + "</td>";
               html += "</tr>";
           }
           document.getElementById("data").innerHTML = html;
        

           

        }


           
        
        
          
           

    
        

        



        
        
        
    }

   
    
        
        

        
}

    


    


        

    



   
    

</script>



