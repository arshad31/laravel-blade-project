## Tasks Overview

### **Task 1: Blade Layout Conversion**
- Convert the provided HTML/Bootstrap template into Laravel Blade structure:
  - `resources/views/layouts.blade.php`
  - `resources/views/home.blade.php`
  - `resources/views/projects.blade.php`
  - `resources/views/resume.blade.php`
  - `resources/views/contact.blade.php`
  - Use `@yield` for dynamic content and `@include` for partials.

---

### **Task 2: POS Database**
The POS database(pos_db.sql included into repository) consists of the following entities:

#### **Tables**
1. **Users**
   - `id`, `name`, `mobile`, `otp`, `email`,`email_varified_at`, `password`,`remember_token`, timestamps

2. **Categories**
   - `id`, `name`, `user_id`, timestamps

3. **Customers**
   - `id`, `name`, `email`, `mobile`, `user_id`, timestamps

4. **Products**
   - `id`, `name`, `price`, `unit`, `category_id`, `user_id`, timestamps

5. **Invoices**
   - `id`, `total`, `discount`, `vat`, `payable`, `user_id`, `customer_id`, timestamps

6. **Invoice_Products**
   - `id`, `invoice_id`, `product_id`, `user_id`, `qty`, `sale_price`, timestamps

#### **Relationships**
- A **User** can manage multiple **Categories, Customers, Products, and Invoices**.  
- A **Category** can contain many **Products**.  
- An **Invoice** belongs to a **Customer** and contains multiple **Invoice_Products**.  
- **Invoice_Products** represents a many-to-many relationship between **Invoices** and **Products**.  

---

### **Task 3: Form Submission**
- It is simple form submission that will submit data via **POST** request.
- After submission:
  - Wll save data in **Session**.
  - Redirect to a confirmation page.
  - Display a success message.

---

### **Task 4: File Upload**
- A form to include file upload.
- Store uploaded files in `storage/app/uploads`.
- On success:
  - Redirect with a success message.
  - Set a cookie (`file_uploaded=true`) in the response header.

---

## ⚙️ Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/arshad31/laravel-blade-project.git
   