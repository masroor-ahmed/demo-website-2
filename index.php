<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Student Survey</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Medical Student Survey</h1>
    </header>

    <main>
        <form id="surveyForm">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required min="18" max="100">
            </div>
            <div class="form-group">
                <label for="blood">Blood group:</label>
                <select id="blood" name="blood" required>
                    <option value="">Select blood group</option>
                    <option value="1">A+</option>
                    <option value="2">B+</option>
                    <option value="3">AB+</option>
                    <option value="4">O+</option>
                    <option value="5">A-</option>
                    <option value="2">B-</option>
                    <option value="3">AB-</option>
                    <option value="4">O-</option>

                </select>
            </div>
            <div class="form-group">
                <label for="hobby">What's your favourite outdoor activity?</label>
                <input type="text" id="hobby" name="hobby" required>
            </div>

            <div class="form-group">
                <label for="family">Is there any diabetic in your family?</label>
                <input type="text" id="family" name="family" required>
            </div>

            <div class="form-group">
                <label for="serv">Have you seen any malignant tumours survivor?</label>
                <input type="text" id="serv" name="serv" required>
            </div>

            <div class="form-group">
                <label for="measure">What measures would you take to improve the problems faced by the medical community in Pakistan?</label>
                <input type="text" id="measure" name="measure" required>
            </div>

            <div class="form-group">
                <label for="institute">Medical Institute:</label>
                <input type="text" id="institute" name="institute" required>
            </div>

        
            <div class="form-group">
                <label for="year">MBBS Year:</label>
                <select id="year" name="year" required>
                    <option value="">Select Year</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                    <option value="5">5th Year</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="how">How is your experience till now in MBBS?</label>
                <input type="text" id="how" name="how" required>
            </div>

            <div class="form-group">
                <label for="specialization">Desired Specialization:</label>
                <input type="text" id="specialization" name="specialization" placeholder="For example: Cardiology">
            </div>

            <div class="form-group">
                <label for="research">Do you find your institute competitive?</label>
                <div class="radio-group">
                    <input type="radio" id="institute-yes" name="inst" value="yes">
                    <label for="institute-yes">Yes</label>
                    <input type="radio" id="institute-no" name="inst" value="no">
                    <label for="institute-no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="research">Interested in Research?</label>
                <div class="radio-group">
                    <input type="radio" id="research-yes" name="research" value="yes">
                    <label for="research-yes">Yes</label>
                    <input type="radio" id="research-no" name="research" value="no">
                    <label for="research-no">No</label>
                </div>
            </div>

            <button type="submit" id="nextButton">Next</button>
        </form>
    </main>
 
    <footer>
        <p>&copy; 2024 Medical Student Survey. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>