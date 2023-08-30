## Frontend

The frontend, built using Vue.js along with Bootstrap, Font Awesome, and barcode CDNs, offers:
- Patient selection via a searchable dropdown.
- Doctor selection through a similar dropdown.
- Test categories with the ability to select tests individually or collectively.
- Submission button for generating a printable barcode.
- User-friendly design, responsive layout, and smooth interactions.

## Backend

The backend, powered by Laravel and MySQL, handles:
- Database management for patients, doctors, test_categories barcode_generations and tests data.
- API endpoints for retrieving patient and doctor information.
- Data processing, storage, and retrieval from the frontend.
- Seamless integration with the frontend using Axios.

Together, the frontend and backend deliver a streamlined and efficient laboratory reception solution.


## If you'd like to explore the system with some sample data, feel free to use the test dataset below:

INSERT INTO patients (full_name, birthday_date, phone_number, gender, note, created_at, updated_at)
VALUES
    ('John Doe', '1990-05-15', '1234567890', 'Male', 'Some notes here.', NOW(), NOW()),
    ('Jane Smith', '1985-08-20', '9876543210', 'Female', NULL, NOW(), NOW()),
    ('Michael Johnson', '1978-12-03', '5551234567', 'Male', 'Patient with allergies.', NOW(), NOW()),
    ('Emily Brown', '2000-02-10', '1112223333', 'Female', NULL, NOW(), NOW()),
    ('David Wilson', '1995-11-25', '4445556666', 'Male', NULL, NOW(), NOW());

INSERT INTO doctors (full_name, phone_number, created_at, updated_at)
VALUES
    ('Dr Smith', '5558889999', NOW(), NOW()),
    ('Dr Johnson', '6667778888', NOW(), NOW()),
    ('Dr Williams', '1112223333', NOW(), NOW()),
    ('Dr Anderson', '4445556666', NOW(), NOW()),
    ('Dr Martinez', '7778889999', NOW(), NOW());


INSERT INTO barcode_generations (patient_id, doctor_id, barcode, test_ids, created_at, updated_at)
VALUES
    (1, 1, 'ABC123', '[1, 2]', NOW(), NOW()),
    (2, 2, 'DEF456', '[3, 4]', NOW(), NOW()),
    (3, 3, 'GHI789', '[5, 6]', NOW(), NOW()),
    (4, 4, 'JKL012', '[7, 8]', NOW(), NOW()),
    (5, 5, 'MNO345', '[9, 10]', NOW(), NOW());


INSERT INTO test_categories (name, created_at, updated_at)
VALUES
    ('Blood Tests', NOW(), NOW()),
    ('Urine Tests', NOW(), NOW()),
    ('X-ray Tests', NOW(), NOW()),
    ('MRI Tests', NOW(), NOW()),
    ('Allergy Tests', NOW(), NOW());

INSERT INTO tests (name, test_category_id, created_at, updated_at)
VALUES
    ('Complete Blood Count', 1, NOW(), NOW()),
    ('Hemoglobin Test', 1, NOW(), NOW()),
    ('Platelet Count', 1, NOW(), NOW()),
    ('White Blood Cell Count', 1, NOW(), NOW()),
    ('Blood Glucose Test', 1, NOW(), NOW());

INSERT INTO tests (name, test_category_id, created_at, updated_at)
VALUES
    ('Urine Culture', 2, NOW(), NOW()),
    ('Urine pH Test', 2, NOW(), NOW()),
    ('Microscopic Urinalysis', 2, NOW(), NOW()),
    ('Urine Protein Test', 2, NOW(), NOW()),
    ('Urine Creatinine Test', 2, NOW(), NOW());

INSERT INTO tests (name, test_category_id, created_at, updated_at)
VALUES
    ('Chest X-ray', 3, NOW(), NOW()),
    ('Abdominal X-ray', 3, NOW(), NOW()),
    ('Bone X-ray', 3, NOW(), NOW()),
    ('Spine X-ray', 3, NOW(), NOW()),
    ('Joint X-ray', 3, NOW(), NOW());

INSERT INTO tests (name, test_category_id, created_at, updated_at)
VALUES
    ('Brain MRI', 4, NOW(), NOW()),
    ('Spine MRI', 4, NOW(), NOW()),
    ('Abdominal MRI', 4, NOW(), NOW()),
    ('Pelvic MRI', 4, NOW(), NOW()),
    ('Chest MRI', 4, NOW(), NOW());

INSERT INTO tests (name, test_category_id, created_at, updated_at)
VALUES
    ('Skin Allergy Test', 5, NOW(), NOW()),
    ('Blood Allergy Test', 5, NOW(), NOW()),
    ('Food Allergy Test', 5, NOW(), NOW()),
    ('Respiratory Allergy Test', 5, NOW(), NOW()),
    ('Insect Allergy Test', 5, NOW(), NOW());
