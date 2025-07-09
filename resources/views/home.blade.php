@extends('layouts.app')

@section('title', 'Home - Green Tax Awareness for Gen Z')

@section('content')
<div class="relative bg-emerald-700 text-white">
    <div class="absolute inset-0 bg-gradient-to-r from-emerald-800 to-emerald-600 opacity-90"></div>
    <div class="container mx-auto px-4 py-16 md:py-24 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Green Tax Awareness for Generation Z</h1>
            <p class="text-xl mb-8">Understanding environmental taxation is essential for navigating an eco-conscious economy and creating a sustainable future.</p>
            <div class="flex flex-wrap gap-4">
                <a href="/basics" class="bg-white text-emerald-700 hover:bg-emerald-100 px-6 py-3 rounded-lg font-medium transition">Learn the Basics</a>
                <a href="/quiz" class="bg-emerald-600 hover:bg-emerald-500 border border-white px-6 py-3 rounded-lg font-medium transition">Test Your Knowledge</a>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <div class="prose prose-lg max-w-none">
            <h2 class="text-3xl font-bold text-emerald-700 mb-6">Why Green Taxes Matter to Gen Z</h2>
            
            <p>As a member of Generation Z, you've grown up in a world where climate change isn't just a distant threat—it's a defining reality of your lifetime. From increasingly extreme weather events to shifting ecosystems, the environmental challenges facing our planet have never been more urgent or visible. But amid the overwhelming scale of the climate crisis, there's a powerful economic tool that's reshaping how societies address environmental challenges: green taxation.</p>
            
            <p>Green taxes, also known as environmental taxes or eco-taxes, represent one of the most significant policy approaches to combating environmental degradation and promoting sustainability. Unlike traditional regulations that simply prohibit harmful activities, green taxes work by putting a price on pollution and resource depletion, creating financial incentives that align economic decisions with environmental goals. For Generation Z—born between 1996 and 2010—understanding these mechanisms isn't just academically interesting; it's essential for navigating the economic and environmental landscape that will define your adult lives.</p>
            
            <p>Why should Gen Z specifically care about green taxation? The answer lies in both timing and impact. As digital natives with unprecedented access to information and global perspectives, your generation has demonstrated remarkable environmental consciousness. Research shows Gen Z has significant concern about environmental issues, with many viewing climate change as one of the most pressing challenges of your time. Simultaneously, you're entering adulthood during a period of major economic and environmental policy transformation, where green taxes are increasingly becoming central to government strategies worldwide.</p>
            
            <div class="bg-emerald-50 border-l-4 border-emerald-500 p-4 my-6">
                <p class="text-emerald-800 font-medium">The European Commission's ambitious European Green Deal aims for a 55% reduction in greenhouse gas emissions by 2030 and climate neutrality by 2050, with green taxation playing a crucial role in this transition.</p>
            </div>
            
            <p>Moreover, research indicates that Gen Z is particularly concerned about climate issues, with many reporting "climate anxiety" and thinking about the planet's fate daily. This generation is also recognized for demanding purpose, accountability, and rigorous sustainable practices from institutions and businesses. Understanding green taxation provides you with the knowledge to effectively advocate for and participate in creating the sustainable future you envision.</p>
            
            <p>This interactive website aims to bridge the awareness gap around green taxation specifically for Generation Z. We'll explore what green taxes are, how they work, their global implementation, and—most importantly—how they directly impact your daily lives and future prospects. From the basics of carbon taxes to the nuances of energy taxation systems, from consumption choices to career opportunities in emerging green sectors, this content will equip you with the knowledge to navigate an increasingly eco-conscious economy.</p>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Explore Key Topics</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-emerald-600 h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Understanding Green Taxes</h3>
                    <p class="text-gray-600 mb-4">Learn the fundamentals of environmental taxation, including different types of green taxes and how they work to address environmental challenges.</p>
                    <a href="/basics" class="text-emerald-600 hover:text-emerald-800 font-medium">Explore the basics →</a>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-emerald-600 h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Impact on Gen Z's Future</h3>
                    <p class="text-gray-600 mb-4">Discover how green taxes will shape your daily life, career opportunities, and long-term economic prospects as a member of Generation Z.</p>
                    <a href="/impact" class="text-emerald-600 hover:text-emerald-800 font-medium">Learn about impacts →</a>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-emerald-600 h-2"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Taking Action</h3>
                    <p class="text-gray-600 mb-4">Find practical ways to engage with green tax policies, adapt to environmental taxation, and advocate for effective implementation.</p>
                    <a href="/action" class="text-emerald-600 hover:text-emerald-800 font-medium">Get involved →</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Interactive Learning Tools</h2>
        <p class="text-xl text-gray-600 mb-10">Test your knowledge and see how green taxes might affect your life with our interactive tools.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-emerald-50 rounded-lg p-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-emerald-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="text-xl font-bold mb-3">Green Tax Quiz</h3>
                <p class="text-gray-600 mb-4">Challenge yourself with our interactive quiz to test your understanding of green taxation concepts.</p>
                <a href="/quiz" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-medium px-6 py-2 rounded-lg transition">Take the Quiz</a>
            </div>
            
            <div class="bg-emerald-50 rounded-lg p-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-emerald-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-bold mb-3">Carbon Tax Calculator</h3>
                <p class="text-gray-600 mb-4">Estimate how carbon taxes might affect your transportation and energy costs with our interactive calculator.</p>
                <a href="/calculator" class="inline-block bg-emerald-600 hover:bg-emerald-700 text-white font-medium px-6 py-2 rounded-lg transition">Use Calculator</a>
            </div>
        </div>
    </div>
</div>

<div class="bg-emerald-700 text-white py-12">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Join the Conversation</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Create an account to save your quiz results, track your learning progress, and participate in discussions about green taxation.</p>
        <div class="flex justify-center gap-4">
            <a href="/register" class="bg-white text-emerald-700 hover:bg-emerald-100 px-6 py-3 rounded-lg font-medium transition">Sign Up</a>
            <a href="/login" class="bg-emerald-600 hover:bg-emerald-500 border border-white px-6 py-3 rounded-lg font-medium transition">Log In</a>
        </div>
    </div>
</div>
@endsection
