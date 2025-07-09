@extends('layouts.app')

@section('title', 'Carbon Tax Calculator - Green Tax Awareness for Gen Z')

@section('content')
<div class="bg-emerald-700 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">Carbon Tax Calculator</h1>
            <p class="text-xl">Estimate how carbon taxes might affect your transportation and energy costs with our interactive calculator.</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6 bg-emerald-50 border-b border-emerald-100">
                <h2 class="text-2xl font-bold text-emerald-700">Carbon Tax Impact Calculator</h2>
                <p class="text-gray-600">Use this tool to estimate how carbon taxes might affect your monthly expenses based on your lifestyle choices.</p>
            </div>
            
            <div class="p-6">
                <form id="calculator-form">
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6">Transportation</h3>
                        
                        <div class="mb-4">
                            <label for="car-type" class="block font-medium mb-2">Primary Vehicle Type</label>
                            <select id="car-type" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="none">No car / Don't drive</option>
                                <option value="electric">Electric Vehicle</option>
                                <option value="hybrid">Hybrid Vehicle</option>
                                <option value="small">Small Gasoline Car (< 2.0L)</option>
                                <option value="medium">Medium Gasoline Car (2.0-3.0L)</option>
                                <option value="large">Large Gasoline Car/SUV (> 3.0L)</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="km-per-month" class="block font-medium mb-2">Average Kilometers Driven per Month</label>
                            <input type="range" id="km-per-month" min="0" max="2000" step="50" value="500" class="w-full">
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>0 km</span>
                                <span id="km-value">500 km</span>
                                <span>2000 km</span>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="public-transit" class="block font-medium mb-2">Public Transit Usage</label>
                            <select id="public-transit" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="none">None</option>
                                <option value="occasional">Occasional (1-3 days per month)</option>
                                <option value="regular">Regular (1-3 days per week)</option>
                                <option value="frequent">Frequent (4+ days per week)</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="flights-per-year" class="block font-medium mb-2">Flights per Year</label>
                            <input type="number" id="flights-per-year" min="0" max="50" value="2" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6">Home Energy</h3>
                        
                        <div class="mb-4">
                            <label for="home-size" class="block font-medium mb-2">Home Size</label>
                            <select id="home-size" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="small">Small Apartment (< 50 m²)</option>
                                <option value="medium" selected>Medium Home (50-120 m²)</option>
                                <option value="large">Large Home (> 120 m²)</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="heating-type" class="block font-medium mb-2">Primary Heating Source</label>
                            <select id="heating-type" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="electric">Electric</option>
                                <option value="natural-gas">Natural Gas</option>
                                <option value="oil">Oil</option>
                                <option value="heat-pump">Heat Pump</option>
                                <option value="renewable">Renewable (Solar, Geothermal)</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="energy-efficiency" class="block font-medium mb-2">Home Energy Efficiency</label>
                            <select id="energy-efficiency" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="low">Low (Older home, minimal insulation)</option>
                                <option value="medium" selected>Medium (Average insulation and efficiency)</option>
                                <option value="high">High (Well-insulated, energy-efficient appliances)</option>
                                <option value="very-high">Very High (Passive house or similar standard)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-6">Carbon Tax Scenarios</h3>
                        
                        <div class="mb-4">
                            <label for="tax-scenario" class="block font-medium mb-2">Carbon Tax Level</label>
                            <select id="tax-scenario" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="low">Low ($30 per tonne CO₂)</option>
                                <option value="medium" selected>Medium ($70 per tonne CO₂)</option>
                                <option value="high">High ($120 per tonne CO₂)</option>
                                <option value="very-high">Very High ($200 per tonne CO₂)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <button type="button" id="calculate-button" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-3 px-4 rounded-lg transition">
                            Calculate Carbon Tax Impact
                        </button>
                    </div>
                </form>
                
                <div id="results" class="hidden mt-8 p-6 bg-emerald-50 rounded-lg">
                    <h3 class="text-xl font-bold text-emerald-700 mb-4">Your Estimated Carbon Tax Impact</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h4 class="font-bold mb-2">Monthly Impact</h4>
                            <div class="text-3xl font-bold text-emerald-700" id="monthly-impact">$0</div>
                        </div>
                        <div>
                            <h4 class="font-bold mb-2">Annual Impact</h4>
                            <div class="text-3xl font-bold text-emerald-700" id="annual-impact">$0</div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-bold mb-2">Breakdown</h4>
                        <div class="bg-white p-4 rounded-md">
                            <div class="flex justify-between mb-2">
                                <span>Transportation:</span>
                                <span id="transport-impact">$0</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Home Energy:</span>
                                <span id="energy-impact">$0</span>
                            </div>
                            <div class="flex justify-between pt-2 border-t border-gray-200">
                                <span class="font-bold">Total Monthly:</span>
                                <span class="font-bold" id="total-impact">$0</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <h4 class="font-bold mb-2">Potential Savings</h4>
                        <p class="mb-4">Here are some ways you could reduce your carbon tax exposure:</p>
                        <ul class="list-disc pl-5 space-y-2" id="savings-tips">
                            <!-- Dynamically populated based on user inputs -->
                        </ul>
                    </div>
                    
                    <div class="flex flex-wrap gap-4">
                        <button id="recalculate-button" class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-4 rounded-lg transition">
                            Recalculate
                        </button>
                        <a href="/action" class="bg-white border border-emerald-600 text-emerald-600 hover:bg-emerald-50 font-medium py-2 px-4 rounded-lg transition">
                            Learn How to Take Action
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">About This Calculator</h2>
            <p class="text-gray-600 mb-4">This calculator provides an estimate of how carbon taxes might affect your monthly and annual expenses based on your lifestyle choices. The calculations are simplified and intended for educational purposes.</p>
            <p class="text-gray-600 mb-4">Actual carbon tax impacts will vary based on your specific circumstances, local policies, and how carbon tax revenue is used (e.g., through rebates or tax reductions in other areas).</p>
            <p class="text-gray-600">To learn more about how carbon taxes work and how you can adapt to them, explore our <a href="/action" class="text-emerald-600 hover:text-emerald-800">Taking Action</a> section.</p>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const kmRangeInput = document.getElementById('km-per-month');
        const kmValueDisplay = document.getElementById('km-value');
        const calculateButton = document.getElementById('calculate-button');
        const resultsDiv = document.getElementById('results');
        const recalculateButton = document.getElementById('recalculate-button');
        
        // Update km value display when slider changes
        kmRangeInput.addEventListener('input', function() {
            kmValueDisplay.textContent = `${this.value} km`;
        });
        
        // Calculate button click handler
        calculateButton.addEventListener('click', function() {
            // Get form values
            const carType = document.getElementById('car-type').value;
            const kmPerMonth = parseInt(document.getElementById('km-per-month').value);
            const publicTransit = document.getElementById('public-transit').value;
            const flightsPerYear = parseInt(document.getElementById('flights-per-year').value);
            const homeSize = document.getElementById('home-size').value;
            const heatingType = document.getElementById('heating-type').value;
            const energyEfficiency = document.getElementById('energy-efficiency').value;
            const taxScenario = document.getElementById('tax-scenario').value;
            
            // Calculate carbon tax impact
            const result = calculateCarbonTaxImpact(
                carType, kmPerMonth, publicTransit, flightsPerYear,
                homeSize, heatingType, energyEfficiency, taxScenario
            );
            
            // Update results display
            document.getElementById('monthly-impact').textContent = `$${result.monthlyTotal.toFixed(2)}`;
            document.getElementById('annual-impact').textContent = `$${(result.monthlyTotal * 12).toFixed(2)}`;
            document.getElementById('transport-impact').textContent = `$${result.transportImpact.toFixed(2)}`;
            document.getElementById('energy-impact').textContent = `$${result.energyImpact.toFixed(2)}`;
            document.getElementById('total-impact').textContent = `$${result.monthlyTotal.toFixed(2)}`;
            
            // Generate savings tips
            const savingsTipsElement = document.getElementById('savings-tips');
            savingsTipsElement.innerHTML = '';
            
            result.savingsTips.forEach(tip => {
                const li = document.createElement('li');
                li.textContent = tip;
                savingsTipsElement.appendChild(li);
            });
            
            // Show results
            resultsDiv.classList.remove('hidden');
            resultsDiv.scrollIntoView({ behavior: 'smooth' });
        });
        
        // Recalculate button click handler
        recalculateButton.addEventListener('click', function() {
            resultsDiv.classList.add('hidden');
            document.getElementById('calculator-form').scrollIntoView({ behavior: 'smooth' });
        });
        
        // Carbon tax impact calculation function
        function calculateCarbonTaxImpact(carType, kmPerMonth, publicTransit, flightsPerYear, homeSize, heatingType, energyEfficiency, taxScenario) {
            // Tax rates per scenario ($ per tonne CO2)
            const taxRates = {
                'low': 30,
                'medium': 70,
                'high': 120,
                'very-high': 200
            };
            
            const taxRate = taxRates[taxScenario];
            
            // Transportation impact calculation
            let transportImpact = 0;
            
            // Car emissions factors (kg CO2 per km)
            const carEmissions = {
                'none': 0,
                'electric': 0.02, // Small amount for electricity generation
                'hybrid': 0.1,
                'small': 0.15,
                'medium': 0.2,
                'large': 0.3
            };
            
            // Calculate car impact
            transportImpact += (carEmissions[carType] * kmPerMonth * taxRate) / 1000;
            
            // Public transit impact
            const transitImpact = {
                'none': 0,
                'occasional': 2,
                'regular': 5,
                'frequent': 10
            };
            
            // Adjust for public transit usage (simplified)
            transportImpact += transitImpact[publicTransit] * (taxRate / 100);
            
            // Flight impact (very simplified)
            const flightImpact = flightsPerYear * 0.2 * taxRate;
            transportImpact += flightImpact / 12; // Convert to monthly
            
            // Home energy impact calculation
            let energyImpact = 0;
            
            // Home size factors
            const homeSizeFactor = {
                'small': 0.7,
                'medium': 1,
                'large': 1.5
            };
            
            // Heating type emission factors
            const heatingEmissions = {
                'electric': 0.8,
                'natural-gas': 1.2,
                'oil': 1.5,
                'heat-pump': 0.4,
                'renewable': 0.1
            };
            
            // Energy efficiency factors
            const efficiencyFactor = {
                'low': 1.5,
                'medium': 1,
                'high': 0.6,
                'very-high': 0.3
            };
            
            // Calculate home energy impact
            energyImpact = homeSizeFactor[homeSize] * heatingEmissions[heatingType] * efficiencyFactor[energyEfficiency] * taxRate / 10;
            
            // Generate savings tips based on inputs
            const savingsTips = [];
            
            if (carType === 'large' || carType === 'medium') {
                savingsTips.push('Consider switching to a more fuel-efficient or electric vehicle to reduce transportation costs.');
            }
            
            if (kmPerMonth > 500) {
                savingsTips.push('Reducing your monthly driving by carpooling, combining trips, or using public transit could lower your carbon tax exposure.');
            }
            
            if (publicTransit === 'none' || publicTransit === 'occasional') {
                savingsTips.push('Increasing your use of public transportation could reduce your overall carbon tax costs.');
            }
            
            if (flightsPerYear > 3) {
                savingsTips.push('Consider reducing air travel or purchasing carbon offsets for necessary flights.');
            }
            
            if (heatingType === 'oil' || heatingType === 'natural-gas') {
                savingsTips.push('Transitioning to a heat pump or renewable heating source could significantly reduce your home energy carbon tax costs.');
            }
            
            if (energyEfficiency === 'low' || energyEfficiency === 'medium') {
                savingsTips.push('Improving your home's insulation and energy efficiency could lower your exposure to energy-related carbon taxes.');
            }
            
            // If no specific tips apply, provide general advice
            if (savingsTips.length === 0) {
                savingsTips.push('Your current choices already minimize carbon tax exposure. Consider investing in renewable energy to further reduce your environmental impact.');
            }
            
            // Calculate monthly total
            const monthlyTotal = transportImpact + energyImpact;
            
            return {
                transportImpact,
                energyImpact,
                monthlyTotal,
                savingsTips
            };
        }
    });
</script>
@endsection
