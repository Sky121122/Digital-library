<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigLib/about</title>
</head>
<body>
    <div class="main">
            <div class="ball1"></div>
            <div class="ball2"></div>
            <div class="ball3"></div>
            <div class="ball4"></div>
            <div class="ball5"></div>
        <div class="box">   
                    <div class="nav">
                        <div class="logo">
                            <h2>DigLib</h2>
                        </div>
                        <div class="links">
                            <li id="contact-link">
                                <a href="index.html"><h3>Home</h3></a>
                                <a href="about.html"><h3>About</h3></a>
                                <a href="contact.html"><h3>Contact</h3></a>
                            </li>
                        </div>
                    </div>
                    <section class="under-main">
                        <div class="text">
                            <h3>Your Website Is Ready</h3>                   
                            <body id="php-body">
    <h1>Download <br> Your <br> Website</h1>

    <textarea name="" id="myTextarea" cols="100" rows="40" >


&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
  &lt;title&gt;Powered by Bizzness Gro&lt;/title&gt;
  &lt;style&gt;
    /* Global Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    line-height: 1.6;
  }
  
  header {
    background-color: #4CAF50;
    color: white;
    padding: 1rem 0;
    text-align: center;
  }
  
  header h1 {
    margin: 0;
    font-size: 2.5rem;
  }
  
  header #time {
    font-size: 1rem;
    margin-top: 0.5rem;
  }
  
  .hero {
    padding: 2rem;
    text-align: center;
  }
  
  .hero h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
  }
  
  .books {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    justify-content: center;
  }
  
  .book {
    width: calc(25% - 1.5rem);
    min-width: 150px;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 1rem;
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    text-align: center;
  }
  
  .book:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
  }
  
  .book img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
    
  }
  
  .book h3 {
    margin: 0.8rem 0;
    font-size: 1.2rem;
    color: #333;
  }
  
  .book button {
    padding: 0.5rem 1rem;
    border: none;
    background-color: #4CAF50;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.9rem;
  }
  
  .book button:hover {
    background-color: #45a049;
  }
  
  /* Responsive Design */
  @media (max-width: 768px) {
    .book {
      width: calc(50% - 1.5rem);
    }
  }
  
  @media (max-width: 480px) {
    .book {
      width: 100%;
    }
  }
  
  footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem 0;
    margin-top: 2rem;
  }
  
  footer a {
    color: #4CAF50;
    text-decoration: none;
  }
  
  footer a:hover {
    text-decoration: underline;
  }
  
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;header&gt;
    &lt;h1&gt;<?php echo $_POST["name"];?>&lt;/h1&gt;
    &lt;h2&gt;<?php echo $_POST["email"];?>&lt;/h2&gt;
  &lt;/header&gt;

  &lt;section class="hero"&gt;
    &lt;h2&gt;Explore Your Collection&lt;/h2&gt;
    &lt;div class="books"&gt;
      &lt;!-- Repeat book card structure for 20 books --&gt;
      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-colorful-books_1308-171741.jpg?t=st=1733644409~exp=1733648009~hmac=25bdd457e9a4069cd4b3414386a2f597f066ed02598a6e1fcebc28fae008bd08&w=740" alt="Book 1 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name1"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link1"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-colorful-books_1308-171741.jpg?t=st=1733644409~exp=1733648009~hmac=25bdd457e9a4069cd4b3414386a2f597f066ed02598a6e1fcebc28fae008bd08&w=740" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name2"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link2"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-colorful-books_1308-171741.jpg?t=st=1733644409~exp=1733648009~hmac=25bdd457e9a4069cd4b3414386a2f597f066ed02598a6e1fcebc28fae008bd08&w=740" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name3"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link3"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/opened-book-isolated-white-background_1308-78793.jpg?t=st=1733644721~exp=1733648321~hmac=cb316b5cbb0c20bf8d14790efb34b4f158eae7e56b78f318e55747d9447773e4&w=900" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name4"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link4"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/opened-book-isolated-white-background_1308-78793.jpg?t=st=1733644721~exp=1733648321~hmac=cb316b5cbb0c20bf8d14790efb34b4f158eae7e56b78f318e55747d9447773e4&w=900" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name5"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link5"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/opened-book-isolated-white-background_1308-78793.jpg?t=st=1733644721~exp=1733648321~hmac=cb316b5cbb0c20bf8d14790efb34b4f158eae7e56b78f318e55747d9447773e4&w=900" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name6"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link6"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-colorful-books_74855-314.jpg?t=st=1733644321~exp=1733647921~hmac=6e641634c38de452b4035da9412aa029e5573f4db326122e2e3c2a7ba96bd3b6&w=740" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name7"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link7"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-colorful-books_74855-314.jpg?t=st=1733644321~exp=1733647921~hmac=6e641634c38de452b4035da9412aa029e5573f4db326122e2e3c2a7ba96bd3b6&w=740" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name8"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link8"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-colorful-books_74855-314.jpg?t=st=1733644321~exp=1733647921~hmac=6e641634c38de452b4035da9412aa029e5573f4db326122e2e3c2a7ba96bd3b6&w=740" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name9"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link9"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/red-book-white-background_1308-26708.jpg?t=st=1733643514~exp=1733647114~hmac=14647eef9a30a5d87f58d0209140049769c7cb14354e9e9305298e24ae4b2a44&w=996" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name10"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link10"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/red-book-white-background_1308-26708.jpg?t=st=1733643514~exp=1733647114~hmac=14647eef9a30a5d87f58d0209140049769c7cb14354e9e9305298e24ae4b2a44&w=996" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name11"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link11"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/red-book-white-background_1308-26708.jpg?t=st=1733643514~exp=1733647114~hmac=14647eef9a30a5d87f58d0209140049769c7cb14354e9e9305298e24ae4b2a44&w=996" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name12"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link12"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/blank-open-book_1308-22968.jpg?t=st=1733643539~exp=1733647139~hmac=6976cafd8d1bdc83e750dbf406e0989cb685a19ecdd6fbcd1a85da86998ab79c&w=1060" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name13"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link13"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/blank-open-book_1308-22968.jpg?t=st=1733643539~exp=1733647139~hmac=6976cafd8d1bdc83e750dbf406e0989cb685a19ecdd6fbcd1a85da86998ab79c&w=1060" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name14"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link14"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/blank-open-book_1308-22968.jpg?t=st=1733643539~exp=1733647139~hmac=6976cafd8d1bdc83e750dbf406e0989cb685a19ecdd6fbcd1a85da86998ab79c&w=1060" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name15"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link15"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-blue-books_1308-171795.jpg?t=st=1733643607~exp=1733647207~hmac=b3fb4061a847a148c134f050ed624c737b66e4576cfcc504041dcb6aca23c21c&w=900" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name16"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link16"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-blue-books_1308-171795.jpg?t=st=1733643607~exp=1733647207~hmac=b3fb4061a847a148c134f050ed624c737b66e4576cfcc504041dcb6aca23c21c&w=900" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name17"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link17"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/stack-blue-books_1308-171795.jpg?t=st=1733643607~exp=1733647207~hmac=b3fb4061a847a148c134f050ed624c737b66e4576cfcc504041dcb6aca23c21c&w=900" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name18"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link18"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/read-books-design_24877-49595.jpg?t=st=1733643715~exp=1733647315~hmac=238a1459a0dfa3b7635bcd678648d715cc6a1fc0f120055668151f2014dfff02&w=740" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name19"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link19"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;

      &lt;div class="book"&gt;
        &lt;img src="https://img.freepik.com/free-vector/read-books-design_24877-49595.jpg?t=st=1733643715~exp=1733647315~hmac=238a1459a0dfa3b7635bcd678648d715cc6a1fc0f120055668151f2014dfff02&w=740" alt="Book 2 Cover"&gt;
        &lt;h3&gt;<?php echo $_POST["book-name20"];?>&lt;/h3&gt;
        &lt;a href="<?php echo $_POST["book-link20"];?>"&gt;&lt;button &gt;Access&lt;/button&gt;&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/section&gt;

  &lt;footer&gt;
    &lt;p&gt;&copy; 2024 Bizzness Gro. All rights reserved.&lt;/p&gt;
    &lt;p&gt;Follow us: 
      &lt;a href="https://www.instagram.com/prfct_sky/"&gt;Instagram&lt;/a&gt; | 
      &lt;a href="https://www.linkedin.com/in/saket-yadav-b90a3525b/?trk=public-profile-join-page"&gt;LinkedIn&lt;/a&gt;
    &lt;/p&gt;
  &lt;/footer&gt;

  
&lt;/body&gt;
&lt;/html&gt;

</textarea>

                        </div>
                        <div class="buttons">
                        <button id="downloadButton">Download</button>
                        </div>
                    </section>
        </div>
    </div>

    <script>
 // Select the textarea and button
 const textarea = document.getElementById('myTextarea');
    const downloadButton = document.getElementById('downloadButton');

    // Add a click event listener to the button
    downloadButton.addEventListener('click', () => {
      // Get the content of the textarea
      const content = textarea.value;

      // Create a Blob with the content and set its type to text/html
      const blob = new Blob([content], { type: 'text/html' });

      // Create a temporary anchor element
      const a = document.createElement('a');
      a.href = URL.createObjectURL(blob); // Create a URL for the Blob
      a.download = 'myFile.html'; // Set the file name for download

      // Trigger the download by clicking the anchor programmatically
      a.click();

      // Revoke the object URL to free up memory
      URL.revokeObjectURL(a.href);
    });

</script>
</body>
</html>