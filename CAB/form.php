<!DOCTYPE html>
<html lang="en">
<?php include 'navbar.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/form.css">

</head>
<body>

<div class="container">


    <div class="accordion-container">
      
        <div class="accordion active">
            <br> <br> 
            </br></br>

        <h1 class="heading"> User Questionnaire</h1>

            <div class="accordion-heading">
                <h3>Question 01</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            Are audit and assurance policies, procedures, and standards reviewed and update at least annually?
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Question 02</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            Is the deployment and integration of application code automated where possible?
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Question 03</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            Is cloud data periodically backed up?              </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>Question  04</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
            Are risk management policies and procedures associated with changing organizational assets including application, system, infrastructure, configuration, etc., established, documented, approved, communicated, applied, evaluated and maintained (regardless of whether asset management is internal or external)?            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>accordion heading 05</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>accordion heading 06</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordion-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vel adipisci voluptas ut deserunt magnam tempora esse, necessitatibus sit soluta minima quos atque porro, explicabo saepe expedita quibusdam consectetur? Nemo!
            </p>
        </div>

    </div>

</div>


<script>

let accordions = document.querySelectorAll('.accordion-container .accordion');

accordions.forEach(acco =>{
    acco.onclick = () =>{
        accordions.forEach(subAcco => { subAcco.classList.remove('active') });
        acco.classList.add('active');
    }
})

</script>

    
</body>
</html>