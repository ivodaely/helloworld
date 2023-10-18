<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HTML to PDF using html2pdf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- html2pdf CDN link -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
      integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>
  <body>
    <div id="content">
      <h1>Welcome to html2pdf Tutorial</h1>
      <p>
        This is an example of converting HTML content to a PDF file using the
        html2pdf JavaScript library.
      </p>
    </div>
    <!-- Add a button to trigger PDF generation -->
    <button id="generate-pdf">Generate PDF</button>

    <!-- JavaScript to trigger PDF generation on button click -->
    <script>
      const element = document.getElementById("content");
      // Configure the options for html2pdf
      const options = {
        filename: "my-document.pdf",
        margin: [0, 0, 0, 0],
        image: { type: "jpeg", quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
      };

      // Get the button element
      const generateButton = document.getElementById("generate-pdf");

      // Add a click event listener to the button to trigger PDF generation
      generateButton.addEventListener("click", () => {
        // Create an instance of html2pdf, set the options, and save the PDF
        html2pdf().set(options).from(element).save();
      });
	  
    </script>
  </body>
</html>
