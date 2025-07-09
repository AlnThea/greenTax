@extends('layouts.app')

@section('title', 'Green Tax Quiz - Green Tax Awareness for Gen Z')

@section('content')
<div class="bg-emerald-700 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">Test Your Green Tax Knowledge</h1>
            <p class="text-xl">Challenge yourself with our interactive quiz to see how much you know about environmental taxation.</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6 bg-emerald-50 border-b border-emerald-100">
                <h2 class="text-2xl font-bold text-emerald-700">Green Tax Awareness Quiz</h2>
                <p class="text-gray-600">Answer the following questions to test your knowledge about green taxation concepts.</p>
            </div>
            
            <div class="p-6" id="quiz-container">
                <form id="quiz-form">
                    <div class="mb-8" id="question-1">
                        <h3 class="text-xl font-bold mb-4">Question 1: What is the primary purpose of green taxes?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <input type="radio" id="q1-a" name="q1" value="a" class="mt-1">
                                <label for="q1-a" class="ml-2">To generate revenue for governments</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q1-b" name="q1" value="b" class="mt-1">
                                <label for="q1-b" class="ml-2">To change behavior by incorporating environmental costs into prices</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q1-c" name="q1" value="c" class="mt-1">
                                <label for="q1-c" class="ml-2">To punish companies for environmental violations</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q1-d" name="q1" value="d" class="mt-1">
                                <label for="q1-d" class="ml-2">To replace traditional environmental regulations</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-8" id="question-2">
                        <h3 class="text-xl font-bold mb-4">Question 2: Which principle is at the heart of green taxation?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <input type="radio" id="q2-a" name="q2" value="a" class="mt-1">
                                <label for="q2-a" class="ml-2">The "government knows best" principle</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q2-b" name="q2" value="b" class="mt-1">
                                <label for="q2-b" class="ml-2">The "polluter pays" principle</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q2-c" name="q2" value="c" class="mt-1">
                                <label for="q2-c" class="ml-2">The "consumer is king" principle</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q2-d" name="q2" value="d" class="mt-1">
                                <label for="q2-d" class="ml-2">The "equal distribution" principle</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-8" id="question-3">
                        <h3 class="text-xl font-bold mb-4">Question 3: Which of the following is NOT typically considered a type of green tax?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <input type="radio" id="q3-a" name="q3" value="a" class="mt-1">
                                <label for="q3-a" class="ml-2">Carbon taxes</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q3-b" name="q3" value="b" class="mt-1">
                                <label for="q3-b" class="ml-2">Energy taxes</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q3-c" name="q3" value="c" class="mt-1">
                                <label for="q3-c" class="ml-2">Income taxes</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q3-d" name="q3" value="d" class="mt-1">
                                <label for="q3-d" class="ml-2">Transport taxes</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-8" id="question-4">
                        <h3 class="text-xl font-bold mb-4">Question 4: What is the "double dividend" of green taxation?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <input type="radio" id="q4-a" name="q4" value="a" class="mt-1">
                                <label for="q4-a" class="ml-2">Taxing both producers and consumers</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q4-b" name="q4" value="b" class="mt-1">
                                <label for="q4-b" class="ml-2">Reducing environmental harm while generating revenue</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q4-c" name="q4" value="c" class="mt-1">
                                <label for="q4-c" class="ml-2">Applying the tax at both production and consumption stages</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q4-d" name="q4" value="d" class="mt-1">
                                <label for="q4-d" class="ml-2">Collecting taxes twice a year</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-8" id="question-5">
                        <h3 class="text-xl font-bold mb-4">Question 5: Which country introduced the world's first carbon tax in 1990?</h3>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <input type="radio" id="q5-a" name="q5" value="a" class="mt-1">
                                <label for="q5-a" class="ml-2">United States</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q5-b" name="q5" value="b" class="mt-1">
                                <label for="q5-b" class="ml-2">Germany</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q5-c" name="q5" value="c" class="mt-1">
                                <label for="q5-c" class="ml-2">Finland</label>
                            </div>
                            <div class="flex items-start">
                                <input type="radio" id="q5-d" name="q5" value="d" class="mt-1">
                                <label for="q5-d" class="ml-2">Japan</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <button type="button" id="submit-quiz" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-3 px-4 rounded-lg transition">
                            Submit Answers
                        </button>
                    </div>
                </form>
                
                <div id="quiz-results" class="hidden mt-8 p-6 bg-emerald-50 rounded-lg">
                    <h3 class="text-xl font-bold text-emerald-700 mb-4">Your Results</h3>
                    <p class="text-lg mb-4">You scored: <span id="score" class="font-bold">0</span> out of 5</p>
                    <div id="feedback" class="mb-6"></div>
                    <div class="flex flex-wrap gap-4">
                        <button id="retry-quiz" class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-4 rounded-lg transition">
                            Try Again
                        </button>
                        <a href="/basics" class="bg-white border border-emerald-600 text-emerald-600 hover:bg-emerald-50 font-medium py-2 px-4 rounded-lg transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Want to Track Your Progress?</h2>
            <p class="text-gray-600 mb-6">Create an account to save your quiz results, track your learning progress, and access more advanced quizzes.</p>
            <div class="flex flex-wrap gap-4">
                <a href="/register" class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium px-6 py-2 rounded-lg transition">Sign Up</a>
                <a href="/login" class="bg-white border border-emerald-600 text-emerald-600 hover:bg-emerald-50 font-medium px-6 py-2 rounded-lg transition">Log In</a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quizForm = document.getElementById('quiz-form');
        const submitButton = document.getElementById('submit-quiz');
        const resultsDiv = document.getElementById('quiz-results');
        const scoreSpan = document.getElementById('score');
        const feedbackDiv = document.getElementById('feedback');
        const retryButton = document.getElementById('retry-quiz');
        
        // Correct answers
        const correctAnswers = {
            q1: 'b',
            q2: 'b',
            q3: 'c',
            q4: 'b',
            q5: 'c'
        };
        
        // Feedback for each question
        const feedback = {
            q1: {
                correct: 'Correct! Green taxes primarily aim to change behavior by incorporating environmental costs into prices.',
                incorrect: 'Incorrect. While green taxes do generate revenue, their primary purpose is to change behavior by incorporating environmental costs into prices.'
            },
            q2: {
                correct: 'Correct! The "polluter pays" principle is at the heart of green taxation.',
                incorrect: 'Incorrect. The "polluter pays" principle is the fundamental concept behind green taxation.'
            },
            q3: {
                correct: 'Correct! Income taxes are not typically considered green taxes.',
                incorrect: 'Incorrect. Income taxes are not typically considered green taxes, as they are not directly tied to environmental impacts.'
            },
            q4: {
                correct: 'Correct! The "double dividend" refers to reducing environmental harm while generating revenue.',
                incorrect: 'Incorrect. The "double dividend" refers to the dual benefits of reducing environmental harm while generating revenue.'
            },
            q5: {
                correct: 'Correct! Finland introduced the world\'s first carbon tax in 1990.',
                incorrect: 'Incorrect. Finland introduced the world\'s first carbon tax in 1990, followed by Sweden and Norway.'
            }
        };
        
        // Submit quiz
        submitButton.addEventListener('click', function() {
            let score = 0;
            let feedbackHtml = '';
            
            // Check each answer
            for (const question in correctAnswers) {
                const selectedAnswer = document.querySelector(`input[name="${question}"]:checked`)?.value;
                const isCorrect = selectedAnswer === correctAnswers[question];
                
                if (isCorrect) {
                    score++;
                    feedbackHtml += `<div class="mb-4 p-3 bg-green-100 text-green-800 rounded-md">${feedback[question].correct}</div>`;
                } else {
                    feedbackHtml += `<div class="mb-4 p-3 bg-red-100 text-red-800 rounded-md">${feedback[question].incorrect}</div>`;
                }
            }
            
            // Display results
            scoreSpan.textContent = score;
            feedbackDiv.innerHTML = feedbackHtml;
            resultsDiv.classList.remove('hidden');
            quizForm.classList.add('opacity-50', 'pointer-events-none');
            
            // Scroll to results
            resultsDiv.scrollIntoView({ behavior: 'smooth' });
        });
        
        // Retry quiz
        retryButton.addEventListener('click', function() {
            quizForm.reset();
            resultsDiv.classList.add('hidden');
            quizForm.classList.remove('opacity-50', 'pointer-events-none');
        });
    });
</script>
@endsection
