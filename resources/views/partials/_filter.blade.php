<form action="/">
    <div class="border-2 border-gray-100 m-4 rounded-lg grid grid-cols-3 gap-4">
        <div class="p-4">
            <label for="contract" class="inline-block text-lg mb-2">
                Type of Contract
            </label>
            <select class="border border-gray-200 rounded p-2 w-full" name="contract" id="contract">
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Temporary Job">Temporary Job</option>
                <option value="Internship">Internship</option>
                <option value="Freelance">Freelance</option>
                <option value="Charity">Charity</option>
                <option value="Unknown">Unknown</option>
            </select>
            <label for="hours" class="inline-block text-lg mb-2">
                Hours per Week
            </label>
            <select class="border border-gray-200 rounded p-2 w-full" name="hours" id="hours">
                <option value="0 till 8 hours">0 till 8 hours</option>
                <option value="9 till 16 hours">9 till 16 hours</option>
                <option value="17 till 24 hours">17 till 24 hours</option>
                <option value="25 till 32 hours">25 till 32 hours</option>
                <option value="33 till 40 hours">33 till 40 hours</option>
                <option value="Not specified">Not specified</option>
            </select>
        </div>
        <div class="p-4">
            <label for="min_salary" class="inline-block text-lg mb-2">
                Minimum Salary: € <span id="minimum_salary_value">3000</span>
            </label>
            <input type="range" min="1500" max="8000" value="3000"
                class="border border-gray-200 rounded p-2 w-full" id="min_salary" name="min_salary" />
            <label for="max_salary" class="inline-block text-lg mb-2">
                Maximum Salary: € <span id="maximum_salary_value">5000</span>
            </label>
            <input type="range" min="1500" max="8000" value="5000"
                class="border border-gray-200 rounded p-2 w-full" id="max_salary" name="max_salary" />
        </div>
        <div class="p-4">
            <label for="education" class="inline-block text-lg mb-2">
                Education
            </label>
            <select class="border border-gray-200 rounded p-2 w-full" name="education" id="education">
                <option value="No Education Required">No Education Required</option>
                <option value="High School Degree">High School Degree</option>
                <option value="Associate's Degree">Associate's Degree</option>
                <option value="Bachelor's Degree">Bachelor's Degree</option>
                <option value="Master's Degree">Master's Degree</option>
                <option value="Doctoral Degree">Doctoral Degree</option>
            </select>
            <label for="category" class="inline-block text-lg mb-2">
                Category
            </label>
            <select class="border border-gray-200 rounded p-2 w-full" name="category" id="category">
                <option value="Backend">Backend</option>
                <option value="Frontend">Frontend</option>
                <option value="FullStack">FullStack</option>
                <option value="Mobile">Mobile</option>
                <option value="DevOps">DevOps</option>
                <option value="Design">Design</option>
                <option value="Management">Management</option>
                <option value="Marketing">Marketing</option>
                <option value="Sales">Sales</option>
                <option value="Support">Support</option>
                <option value="Other">Other</option>
            </select>
            <div class='flex justify-end py-4 gap-4'>
                <button type="submit" class="h-10 w-20 text-white rounded-lg bg-laravel ">
                    Filter
                </button>
                <a class="h-10 w-40 py-2 text-center text-white rounded-lg bg-black hover:bg-black" href='/'>
                    Clear All Filters
                </a>
            </div>
        </div>
    </div>

</form>


<script>
    const minimumSalary = document.getElementById('min_salary');
    minimumSalary.step = 100;
    const minimumSalaryValue = document.getElementById('minimum_salary_value');
    const maximumSalary = document.getElementById('max_salary');
    maximumSalary.step = 100;
    const maximumSalaryValue = document.getElementById('maximum_salary_value');

    minimumSalary.addEventListener('input', (event) => {
        minimumSalaryValue.innerText = event.target.value;
    });

    maximumSalary.addEventListener('input', (event) => {
        maximumSalaryValue.innerText = event.target.value;
    });
</script>
