<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
     
<div class="min-h-screen bg-[#0f0f0f] flex items-center justify-center p-4 sm:p-6 font-sans">
        
        <div class="max-w-5xl w-full bg-[#181818] rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.5)] overflow-hidden flex flex-col md:flex-row border border-white/5">
            
            <div class="hidden md:flex md:w-5/12 relative bg-cover bg-center overflow-hidden" 
                 style="background-image: url('https://i.pinimg.com/736x/bb/22/79/bb2279745f8bdd13f9b421ac6b8a20da.jpg">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0f0f0f] via-black/20 to-black/60"></div>
                
                <div class="absolute bottom-12 left-10 right-10">
                    <h1 class="text-4xl font-light text-white leading-tight"><br><span class="font-bold text-white">3A CareTering</span></h1>
                    <div class="h-1 w-12 bg-[#84a31a] my-6"></div>
                    <p class="text-gray-400 text-sm tracking-wide leading-relaxed max-w-xs">
                        Secure portal for managing reservations and guest services.
                    </p>
                </div>
            </div>

            <div class="w-full md:w-7/12 p-8 sm:p-16 flex flex-col justify-center bg-[#181818]">
                
                <div class="mb-10 text-center">
                    <h2 class="text-3xl font-bold text-white tracking-tight">Login</h2>
                    <p class="text-gray-500 mt-2 text-sm">Please enter your credentials</p>
                </div>

                <form action="" class="space-y-10">
                    @csrf

                    <div class="group relative">
                   <label for="email" class="text-[10px] uppercase tracking-[0.2em] text-neutral-500 group-focus-within:text-white transition-colors font-bold block mb-1">
                          Email Address
                </label>
              <input type="email" id="email" name="email" 
                        class="w-full bg-transparent border-b border-white/10 py-3 text-white focus:outline-none focus:border-[#84a31a] transition-all">
                  </div>

                    <div class="group relative">
                        <div class="flex justify-between items-end mb-1">
                            <label for="password" class="text-[10px] uppercase tracking-[0.2em] text-gray-500 group-focus-within:text-[#e1e1e1] transition-colors font-bold block">
                                Password
                            </label>
                            <a href="#" class="text-[10px] text-gray-600 hover:text-[#84a31a] transition-colors uppercase tracking-widest">Forgot?</a>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="w-full bg-transparent border-b border-white/10 py-3 text-white placeholder-gray-800 focus:outline-none focus:border-[#84a31a] transition-all duration-300 text-sm"
                            placeholder="">
                    </div>

                    <div class="flex items-center space-x-3">
                        <label class="relative flex items-center cursor-pointer">
                            <input type="checkbox" name="remember" class="peer sr-only">
                            <div class="w-4 h-4 border border-white/20 rounded bg-transparent peer-checked:bg-[#84a31a] peer-checked:border-transparent transition-all"></div>
                            <svg class="absolute w-3 h-3 text-white left-0.5 hidden peer-checked:block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="ml-3 text-xs text-gray-500 hover:text-gray-300 transition-colors">Remember this device</span>
                        </label>
                    </div>

                    
                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <button type="submit" 
                            class="flex-[2] bg-[#84a31a] hover:bg-[#96b81d] text-white py-4 rounded-md font-bold text-xs uppercase tracking-[0.2em] transition-all transform active:scale-95 shadow-lg shadow-lime-900/20">
                            Sign In
                        </button>
                        
                        <button id="btn-cancel" type="button" onclick="window.history.back()"
                            class="flex-1 dark:text-neutral-50
                             bg-transparent border border-white/10 hover:bg-white/5 text-gray-500 hover:text-white py-4 rounded-md font-bold text-xs uppercase tracking-[0.2em] transition-all">
                            Cancel
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    {{-- He who is contented is rich. - Laozi --}}
</div>