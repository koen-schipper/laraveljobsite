<x-layout>
    <div class="mx-4">
        <x-card class='!p-10 max-w-xl mx-auto mt-12'>
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Edit the Job Listing
                </h2>
                <p class="mb-4">Edit: {{ $listing->title }} @ {{ $listing->company }}</p>
            </header>

            <form method='POST' action="/listings/{{ $listing->id }}" enctype='multipart/form-data'>
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                        value="{{ $listing->company }}" />
                    @error('company')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}" />
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                        placeholder="Example: Remote, Boston MA, etc" value="{{ $listing->location }}" />
                    @error('location')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ $listing->email }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="website" class="inline-block text-lg mb-2">
                        Website
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                        value="{{ $listing->website }}" />
                    @error('website')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="contract" class="inline-block text-lg mb-2">
                        Type of Contract
                    </label>
                    <select class="border border-gray-200 rounded p-2 w-full" name="contract" id="contract">
                        <option value="{{ $listing->contract }}">{{ $listing->contract }}</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Temporary Job">Temporary Job</option>
                        <option value="Internship">Internship</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Charity">Charity</option>
                        <option value="Unknown">Unknown</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="min_salary" class="inline-block text-lg mb-2">
                        Minimum Salary: € <span id="minimum_salary_value">{{ $listing->min_salary }}</span>
                    </label>
                    <input type="range" min="1500" max="8000" value="{{ $listing->min_salary }}"
                        class="border border-gray-200 rounded p-2 w-full" id="min_salary" name="min_salary" />
                </div>

                <div class="mb-6">
                    <label for="max_salary" class="inline-block text-lg mb-2">
                        Maximum Salary: € <span id="maximum_salary_value">{{ $listing->max_salary }}</span>
                    </label>
                    <input type="range" min="1500" max="8000" value="{{ $listing->max_salary }}"
                        class="border border-gray-200 rounded p-2 w-full" id="max_salary" name="max_salary" />
                </div>

                <div class="mb-6">
                    <label for="hours" class="inline-block text-lg mb-2">
                        Hours per Week
                    </label>
                    <select class="border border-gray-200 rounded p-2 w-full" name="hours" id="hours">
                        <option value="{{ $listing->hours }}">{{ $listing->hours }}</option>
                        <option value="0 till 8 hours">0 till 8 hours</option>
                        <option value="9 till 16 hours">9 till 16 hours</option>
                        <option value="17 till 24 hours">17 till 24 hours</option>
                        <option value="25 till 32 hours">25 till 32 hours</option>
                        <option value="33 till 40 hours">33 till 40 hours</option>
                        <option value="Not specified">Not specified</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="education" class="inline-block text-lg mb-2">
                        Education
                    </label>
                    <select class="border border-gray-200 rounded p-2 w-full" name="education" id="education">
                        <option value="{{ $listing->education }}">{{ $listing->education }}</option>
                        <option value="No Education Required">No Education Required</option>
                        <option value="High School Degree">High School Degree</option>
                        <option value="Associate's Degree">Associate's Degree</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Doctoral Degree">Doctoral Degree</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="category" class="inline-block text-lg mb-2">
                        Category
                    </label>
                    <select class="border border-gray-200 rounded p-2 w-full" name="category" id="category">
                        <option value="{{ $listing->category }}">{{ $listing->category }}</option>
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
                </div>


                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">
                        Tags (Comma Separated)
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />
                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Company Logo
                    </label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                    <img class="w-48 mr-6 mb-6 mt-4"
                        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                        alt="" />

                    @error('logo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="inline-block text-lg mb-2">
                        Job Description
                    </label>
                    <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                        placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Edit Job
                    </button>

                    <a href="/listings/manage" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </x-card>
    </div>

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
</x-layout>
