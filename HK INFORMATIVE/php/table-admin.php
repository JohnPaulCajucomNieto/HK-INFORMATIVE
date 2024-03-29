
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../images/araullo-university-logo-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@800&family=Arimo&family=Barlow:wght@500&family=Bebas+Neue&family=Dancing+Script&family=Lobster&family=Montserrat:wght@100;400&family=Quicksand:wght@300&family=Roboto:wght@300&family=Tilt+Warp&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/about.css">
</head>
    <style>
    * {
    margin:0;
    padding: 0;

}
body {
    height: auto;
    width: 100%;
    background-color: antiquewhite;
    font-family:'Tilt Warp';
    background-repeat: no-repeat;
    background-size: cover;
}

.main-header {
    margin: 0;
    background-color: white;
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100px;
    align-items: center;   

}
.logo {
    height: 100px;
    width: auto;
    padding-left: 50px;
    padding-top: 3px;
}
img {
    width: auto;
    height: 90px;
}
.title-head{
    margin-left: 1000px;
    text-align: center;
    padding: 15px;
    font-size: 23px;
    color: rgb(24, 47, 126);
    text-decoration: underline;
}
.navigation {
    justify-content: space-between;
    align-content: center;
}
a {
    text-decoration: none;
    font-size: 15px;
    color: #d6a623b3;
}

.navi1{
    margin-right: 50px;
}
.navi1:hover, .navi2:hover, .navi3:hover{
    text-decoration: underline 2px solid black;
}

.navi3 {
    margin-left:50px;
}
.searchtopic{
    font-family: Montserrat;
    background-color: antiquewhite;
    border-color: transparent;
    border-radius: 20px;
    margin-left: 500px;
    padding-left: 10px;
    padding-right: 10px;
    width: 300px;
    padding-top: 10px;
    padding-bottom: 10px;

}

input[type="search"]{
    outline: none;
}

.main-container {
    background-image:
    linear-gradient(45deg, rgba(24, 47, 126, 0.678), rgba(24, 47, 126, 0.678)),
    url('../images/au-south.jpg');
    background-size: cover;
    width: 100%;
    height: 800px;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}

::-webkit-scrollbar {
    display: none;
}
.box1 {  
    align-items: center;
    text-align: center;
    border: none;
    border-radius: 10px;
    width: 100%;
    height: 500px;
    border:2px solid rgba(24, 47, 126, 0);   
}

.p1 {
    padding-top: 130px;
    color: white;
    text-align: center;
    font-size: 25px;
}
.p2 {
    color: white;
    padding-top: 100px;
    margin: 0;
    font-size: 20px;
}
.button{
    font-family: Montserrat;
    font-size: 20px;
    border:none;
    color: white;
    text-align: center;
    cursor: pointer;
    transition-duration: 0.4s;
}

.btn1{
    background-color: rgba(0, 19, 87, 0.8);
    color: white;
    border: 2px solid white;
    border-radius: 20px;
    padding: 10px 30px;
    font-family: Montserrat;
    font-size: 15px;
    margin-right: 65px;
}
.btn2 {
    background-color:  rgb(24, 47, 126);
    color: white;
    border: 2px solid white;
    border-radius: 20px;
    padding: 10px 30px;
    font-family: Montserrat;
    font-size: 15px;
    margin-top: 20px;
}
.btn1:hover {
    background-color: rgba(255, 187, 0, 0.8);
    color: black;
    cursor: pointer;
    font-weight: BOLD;
}
.btn2:hover {
    background-color: black;
    border-color: white;
    cursor: pointer;
}

.sub-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: auto;
    padding-top: 10px;
    padding-bottom: 10px;
}
.box2, .box3, .box4 {
    background: linear-gradient(45deg, rgba(87, 87, 6, 0.678), rgba(255, 187, 0, 0.678));
    background-color: white;
    position: inherit;
    width: 100%;
    height: 250px;
    text-align: center;
    border: 1.5px solid rgb(15, 14, 14);  
    border-radius: 10px; 
    transition-duration: 0.4s;
    position: relative;
    bottom: 50px;

}
.box2 {
    margin-left: 10px;
    margin-right: 10px;
}
.box4 {
    margin-left: 10px;
    margin-right: 10px;
}
.box2-content{
    background-image:
    linear-gradient(45deg, rgba(255, 187, 0, 0.678), rgba(255, 187, 0, 0.678)),
    url('content-logo.png');
    height: 250px;
    border-radius: 10px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}

.box3-content {
    background-image:
    linear-gradient(45deg, rgba(255, 187, 0, 0.678), rgba(255, 187, 0, 0.678)),
    url('campus-logo.png');
    height: 250px;
    border-radius: 10px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}

.box4-content {
    background-image:
    linear-gradient(45deg, rgba(255, 187, 0, 0.678), rgba(255, 187, 0, 0.678)),
    url('about-logo.png');
    height: 250px;
    border-radius: 10px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
.box2:hover, .box3:hover, .box4:hover{
    padding: 7px 7px;
}

.ft{
    text-align: center;
    background-color: white;
    padding: 20px;
    position: fixed;
    position: relative;
    margin-top: -100px;
    width: 100%;
    
  }
.ic{
    height: 60px;
}
.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: -290px;
    position: relative;
    font-size: 18px;
    text-align: center;
    padding: 20px; /* Adjust the padding as needed */
  }
  
  .styled-table th,
  .styled-table td {
    padding: 15px;
    border: 1px solid black;
    background-color: white;
  }
  .styled-table td{
    font-family: 'Times New Roman', Times, serif;
  }
  .styled-table th {
    background-color: rgb(24, 47, 126);
    color: white;
    font-weight: bold;
  }
  
  .styled-table tbody tr:nth-child(even) {
    background-color: #f5f5f5;
  }
  button{
    padding: 10px;
    border: none;
    color: white;
    font-weight: bold;
    cursor: pointer;
  }
    </style>
<body>
    <div class="main-header p-0">
        <div class="logo">
            <img src="../images/araullo-university-logo-removebg-preview.png">
        </div>
        <div style="position: relative; right: 50px;" class="title-head">
       ADMIN
       <i class="fas fa-sign-out-alt" style="margin-left: 10px; cursor: pointer;" onclick="logout()"></i>
    </div>
</div>

    </div>
    <div class="main-container">
        <div class="box1">
            <p class="p1">
            <div class="learnmore-btn">
                <a class="navi3" href="../php/apply.php">         
                  
                </a> 
            </div>
        </div>

        <table  class="styled-table" style="width:80%; text-align:center; margin-left: 150px;">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
                    <td>LANZ MOLINA</td>
                    <td>PENDING</td>
                    <td><button style="background-color: rgb(39, 155, 39);">ACCEPT</button>&nbsp; &nbsp;<button style="background-color: rgb(190, 28, 28);">DECLINE</button></td>
                   
            </tbody>
        </table>
    </div>

    <footer class="ft">
        <img class="ic"src="../logo/logo.png">
       </footer>

       <script>
        function logout() {
            window.location.href = '../php/logins.php';
            alert('Logout Successful!');
        }
    </script>
   
</body>
</html>