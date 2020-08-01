<!DOCTYPE html>
<html>
<head>
    
	<title>Crime File Reporting System</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
</head>
    
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>Crime File Reporting System</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="Home.php">Home</a></li>
        <li class="active"><a href="About.php">About Us</a></li>
        <li class="active"><a href="FAQ.php">FAQ</a></li>
        <li class="active"><a href="location.php">Location</a></li>
        <li class="active"><a href="Emergency_Contacts.php">Emergency Contacts</a></li>
        <li class="active"><a href="safety_tips.php">Safety Tips</a></li>
        <li class="active"><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
 </nav>
 <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
   body {
  padding-top: 70px;
  }

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 25px;
  color: black;
  font-weight: bold;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.panel p {
  text-align: left;
  font-size: 20px;

}
</style>
</head>
<body>



<button class="accordion">Should I tell the police what has happened to me?</button>
<div class="panel">
  <p>Yes, the police are here to help you. You can call 01-4261945, or in the case of an emergency call 100. Alternatively you can go to your local police station.</p>
</div>

<button class="accordion">What if I tell the police what happened?</button>
<div class="panel">
  <p>Police will talk to you in confidence and an investigation will be implemented with your consent.</p>
</div>

<button class="accordion">I don't want to go to the police. Is there somewhere else I can go for help?</button>
<div class="panel">
  <p>Yes, there are a number of support services available to you including counselling services that can provide advice. In cases of sexual assault you can contact the Sexual Assault Resource Centre (SARC). It can provide you with medical treatment and ongoing support and advice.  If you live in a rural area SARC has a freecall number you can phone.</p>
</div>

<button class="accordion">Will I have to go to court?</button>
<div class="panel">
  <p>You may, if you want to proceed with a prosecution, and the offender pleads not guilty. Whatever you choose, you will be fully supported.</p>
</div>

<button class="accordion">What will the police think of me?</button>
<div class="panel">
  <p>The police will not judge you. You will be treated with sensitivity and respect.</p>
</div>

<button class="accordion">I can't remember exactly what happened so how can I tell the police?</button>
<div class="panel">
  <p>If you are worried and think something has happened to you, tell the police about it. In many cases, a police investigation can uncover other evidence and witnesses which may support your account.</p>
</div>

<button class="accordion">I was a victim of crime in an incident which occurred interstate/overseas, can I report this?</button>
<div class="panel">
  <p>Yes, contact your local police station for advice.</p>
</div>

<button class="accordion">Something happened to me many years ago. Can I do anything about this now?</button>
<div class="panel">
  <p>Yes, the police frequently investigate historical crimes. While there is no guarantee that a historical crime can be solved, the process can be beneficial to individuals who find that they now have access to support services.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>

</html>