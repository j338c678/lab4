function myFunc1()
{
  var x=document.getElementById("US").value;
  var y=document.getElementById("PS").value;
  var email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var item1= document.getElementById("item1").value;
  var item2= document.getElementById("item2").value;
  var item3= document.getElementById("item3").value;
  // var ship=document.getElementById("ship").value;
  //var x=document.getElementById("US").value;
  if(y == "")
  {
    alert("the password cant be blank")
    return false;
  }
  //if(x != "@gmail.com")
  if(email.test(x) == false )
  {
    alert("invalid email format")
    return false;
  }

  if(item1< 0 || item1 == "")
  {
    alert("the quantity of Blue T-Shirt can not be negitive or blank")
    return false;
  }

  if(item2< 0 || item2 == "")
  {
    alert("the quantity of Black T-Shirt can not be negitive or blank")
    return false;
  }

  if(item3< 0 || item3 == "")
  {
    alert("the quantity of White T-Shirt can not be negitive or blank")
    return false;
  }
  // if(ship == "")
  // {
  //   alert("the ship method can not be blank")
  // }
  else
  {
    alert("login")
    return true;
  }


}
