@extends('layouts.app')
@section('title', 'Quizentry | Quiz Admin')

@section('content')
    <div class="container mx-auto py-8">
        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-5 border border-gray-100">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Question Entry</h2>

            <form id="questionForm">
                @csrf
                <div class="mb-4">
                    <label for="question" class="block text-sm font-medium text-gray-700">
                        Question <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="question" name="question"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm rounded-md"
                        placeholder="Enter your question" required>
                </div>

                <div id="options-container">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Options <span
                            class="text-red-500">*</span></label>
                    <div class="flex flex-col space-y-2" id="options-list">
                        <div class="flex items-center space-x-2">
                            <input type="text" name="options[]" placeholder="Option 1"
                                class="flex-1 block w-full px-4 py-2 border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm rounded-md"
                                required>
                        </div>
                        <div class="flex items-center space-x-2">
                            <input type="text" name="options[]" placeholder="Option 2"
                                class="flex-1 block w-full px-4 py-2 border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm rounded-md"
                                required>
                        </div>
                    </div>
                    <button type="button" id="addOptionBtn"
                        class="mt-3 py-1 px-2 bg-green-500 hover:bg-green-600 text-white rounded-md" onclick="addOption()">
                        <i class="fas fa-plus"></i> Add
                    </button>
                </div>
                <!-- Correct Answer -->
                <div class="mt-4">
                    <label for="correct_answer" class="block text-sm font-medium text-gray-700">Correct Answer <span
                            class="text-red-500">*</span></label>
                    <select name="correct_answer" id="correct_answer"
                        class="mt-1 block w-1/4 px-4 py-2 border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm rounded-md"
                        required>
                        <!-- Dynamically filled -->
                    </select>
                </div>

                <div class="mt-6">
                    <label for="explanation" class="block text-sm font-medium text-gray-700">Explanation</label>
                    <textarea id="explanation" name="explanation" rows="4"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm rounded-md"
                        placeholder="Explain why this is the correct answer..."></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md shadow">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const MAX_OPTIONS = 6;
        const MIN_OPTIONS = 2;

        const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');

        function addOption() {
            const optionsList = document.getElementById('options-list');
            const count = optionsList.children.length;

            if (count >= MAX_OPTIONS) return;

            const newOption = document.createElement('div');
            newOption.className = 'flex items-center space-x-2';
            newOption.innerHTML = `
            <input type="text" name="options[]" placeholder="Option ${count + 1}"
                class="flex-1 block w-full px-4 py-2 border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-sm rounded-md" required>
            <button type="button"
                class="py-2 px-3 bg-red-500 hover:bg-red-600 text-white rounded-md"
                onclick="removeOption(this)">
                <i class="fas fa-trash-alt"></i>
            </button>
        `;

            optionsList.appendChild(newOption);
            updateCorrectAnswerDropdown();
        }

        function removeOption(button) {
            const optionsList = document.getElementById('options-list');
            const optionDivs = optionsList.querySelectorAll('.flex.items-center, .flex.items-center.space-x-2');

            if (optionDivs.length > MIN_OPTIONS) {
                button.parentElement.remove();
                updateOptionPlaceholders();
                updateCorrectAnswerDropdown();
            }
        }

        function updateOptionPlaceholders() {
            const inputs = document.querySelectorAll('#options-list input[name="options[]"]');
            inputs.forEach((input, index) => {
                input.placeholder = `Option ${index + 1}`;
            });
        }


        function updateCorrectAnswerDropdown() {
            const dropdown = document.getElementById('correct_answer');
            const inputs = document.querySelectorAll('#options-list input[name="options[]"]');

            dropdown.innerHTML = '';

            const defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.textContent = 'Select Option';
            defaultOption.disabled = true;
            defaultOption.selected = true;
            dropdown.appendChild(defaultOption);

            inputs.forEach((input, index) => {
                const opt = document.createElement('option');
                opt.value = index + 1; // Value is a number (1-based)
                opt.textContent = `Option ${index + 1}`; // Shown text
                dropdown.appendChild(opt);
            });
        }




        // Initial setup on page load
        document.addEventListener('DOMContentLoaded', () => {
            updateOptionPlaceholders();
            updateCorrectAnswerDropdown();
        });

        document.getElementById('questionForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Stop normal form submission

            const form = e.target;
            const formData = new FormData(form);

            fetch('/quizentry', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    alert('Question submitted successfully!');

                    form.reset();
                    updateOptionPlaceholders();
                    updateCorrectAnswerDropdown();
                    const correctDropdown = document.getElementById('correct_answer');
                    if (correctDropdown.options.length > 0) {
                        correctDropdown.selectedIndex = 0;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to submit question.');
                });
        });
    </script>

@endsection
