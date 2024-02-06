# Hospital Management System (Semester 1 Assignment)

## Patient Portal
The patient portal enables patients to book and cancel appointments. Upon booking, patient information is saved in the `patient_portal` table of the Hospital database. To cancel an appointment, patients can enter their phone number and click "Cancel Appointment". If the number matches an existing record, it's deleted from the database.

### HTML Form Page:
#### HTML Code:
- Displays a form for booking and cancelling appointments.
- Input fields include patient name, email, contact number, appointment time, and symptoms.

### Inserting Data:
- Upon clicking "Book Appointment", entered data is saved in the `patient_portal` table.
#### Insert PHP Code:
- Establishes a connection to the database and inserts input data into the table.

### Deleting Record/Cancelling Appointment:
- Clicking "Cancel Appointment" deletes the corresponding record from the `patient_portal` table.
#### Delete PHP Code:
- Validates the entered contact number and deletes the record if found.

## Billing Portal
The billing portal allows billing staff to save and delete billing details of patients. Data is stored in the `billing` table of the Hospital database. Records can be deleted using patient contact numbers.

### HTML Form Page:
#### HTML Code:
- Provides a form for saving and deleting billing details.
- Input fields include patient name, doctor name, contact number, payment method, bill amount, amount paid, and insurance provider.

### Inserting Billing Details:
- Clicking "Save Billing Details" saves the entered data in the `billing` table.
#### Insert PHP Code:
- Establishes a database connection and inserts billing data into the table.

### Deleting Billing Details:
- Clicking "Delete Billing Details" removes the billing record associated with the entered contact number.
#### Delete PHP Code:
- Validates the contact number and deletes the record if found.

## Doctor Portal
The doctor portal enables doctors to save patient diagnosis data and delete patient records using contact numbers. Data is stored in the `doctor_portal` table of the Hospital database.

### HTML Page:
#### HTML Code:
- Displays a form for inserting and deleting patient diagnosis data.
- Input fields include patient name, contact number, symptoms, and diagnosis.

### Inserting Patient Diagnosis Data:
- Clicking "Save Patient Data" saves the diagnosis data in the `doctor_portal` table.
#### Insert PHP Code:
- Connects to the database and inserts patient diagnosis data.

### Deleting Patient Diagnosis Data:
- Clicking "Delete Patient Data" deletes the patient record corresponding to the entered contact number.
#### Delete PHP Code:
- Validates the contact number and deletes the record if found.

## Note
- Replace `localhost`, `root`, and empty password fields with actual credentials.
- Ensure proper error handling and security measures in production environments.
