<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sneaker Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/categories-bar.css">
  <link rel="stylesheet" href="../styles/items-section.css">
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../styles/support.css">
</head>
<body onload="loadAll()">
  <?php include_once 'header.php'; ?>

  <div class="section-name">Support</div>
  <section class="support">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Submit a Ticket</h1>
          <h5>Please submit the following details and we will get back to you shortly. Thank you for shopping!</h5>
          <form id="support-form">
            <table class="table">
              <tr>
                <td><center>Email:</center></td>
                <td><input type="text" name="email" required></td>
              </tr>
              <tr>
                <td><center>Phone Number (optional): </center></td>
                <td><input type="text" name="tele"></td>
              </tr>
              <tr>
                <td><center>Order Number:</center></td>
                <td><input type="text" name="order#" required></td>
              </tr>
              <tr>
                <td><center>Category:</center></td>
                <td>
                  <select class="support-dropdown" name="support-categories" required>
                    <option>I want to request a refund</option>
                    <option>I have an issue with the shipping of my item(s)</option>
                    <option>The item I received was the incorrect item</option>
                    <option>The item I received was damaged/stolen</option>
                    <option>Other</option>
                  </select>
                </td>
              </tr>
                <td><center>Description:</center></td>
                <td class="description-box"><textarea class="description" name="description" rows="20" cols="90" required></textarea></td>
              </tr>
            </table>
            </center>
            <div>
              <input type="reset" name="reset">
              <input id="submit-button" type="submit" name="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <dialog id="modal">
    <div id="modalMessage"></div>
    <button id="closeModal">Close</button>
  </dialog>

  <?php include_once 'footer.php'; ?>
</body>
</html>