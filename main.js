async function getUsers(){
    const response = await fetch("http://localhost:8080/users");
    const jsonData = await response.json();
    console.log(jsonData); 
    document.getElementById('Users Registration').innerHTML=jsonData.Users
    }
    
    function Users(){
        getUsers()
    
    }
    window.onload=Users