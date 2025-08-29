<div class="md:flex">
    <ul id="tabs" class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
        <li>
            <a href="#" data-tab="profile" class="class-tab active" aria-current="page">
                Profile
            </a>
        </li>
        <li>
            <a href="#" data-tab="dashboard" class="class-tab">
                Dashboard
            </a>
        </li>
        <li>
            <a href="#" data-tab="settings" class="class-tab">
                Settings
            </a>
        </li>
        <li>
            <a href="#" data-tab="contact" class="class-tab">
                Contact
            </a>
        </li>

    </ul>
    <div class="w-full">
        <div data-tab-content="profile" class="tab-content container-content">
            <div class="accordion" id="accordion-profile">
                <div class="accordion-item">
                    <h2>
                        <button type="button" class="accordion-button accordion-content" data-target="#accordion-profile-1">
                            Parent Item 1
                            <span class="accordion-icon ml-2 text-xl transition">+</span>
                        </button>
                    </h2>
                    <div id="accordion-profile-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                        <div class="accordion mt-2" id="accordionChild1">
                            <div class="accordion-item">
                                <h2>
                                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-profile-1-1">
                                        Child Item 1.1
                                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                                    </button>
                                </h2>
                                <div id="accordion-profile-1-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                    <span class="accordion-link">This is the content for Child Item 1.1.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2>
                        <button type="button" class="accordion-button accordion-content" data-target="#accordion-profile-2">
                            Parent Item 2
                            <span class="accordion-icon ml-2 text-xl transition">+</span>
                        </button>
                    </h2>
                    <div id="accordion-profile-2" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                        <div class="accordion mt-2" id="accordionChild2">
                            <div class="accordion-item">
                                <h2>
                                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-profile-2-1">
                                        Child Item 2.1
                                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                                    </button>
                                </h2>
                                <div id="accordion-profile-2-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                    <span class="accordion-link">This is the content for Child Item 2.1.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div data-tab-content="dashboard" class="tab-content hidden">
            <div class="accordion" id="accordion-dashboard">
                <div class="accordion-item">
                    <h2>
                        <button type="button" class="accordion-button accordion-content" data-target="#accordion-dashboard-1">
                            Parent Item 1
                            <span class="accordion-icon ml-2 text-xl transition">+</span>
                        </button>
                    </h2>
                    <div id="accordion-dashboard-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                        <div class="accordion mt-2" id="accordionChild1">
                            <div class="accordion-item">
                                <h2>
                                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-dashboard-1-1">
                                        Child Item 1.1
                                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                                    </button>
                                </h2>
                                <div id="accordion-dashboard-1-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                    <span class="accordion-link">This is the content for Child Item 1.1.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2>
                        <button type="button" class="accordion-button accordion-content" data-target="#accordion-dashboard-2">
                            Parent Item 2
                            <span class="accordion-icon ml-2 text-xl transition">+</span>
                        </button>
                    </h2>
                    <div id="accordion-dashboard-2" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                        <div class="accordion mt-2" id="accordionChild2">
                            <div class="accordion-item">
                                <h2>
                                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-dashboard-2-1">
                                        Child Item 2.1
                                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                                    </button>
                                </h2>
                                <div id="accordion-dashboard-2-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                    <span class="accordion-link">This is the content for Child Item 2.1.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-tab-content="settings" class="tab-content hidden">
            <div class="accordion-item">
                <h2>
                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-settings-1">
                        Parent Item 1
                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                    </button>
                </h2>
                <div id="accordion-settings-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                    <div class="accordion mt-2" id="accordionChild1">
                        <div class="accordion-item">
                            <h2>
                                <button type="button" class="accordion-button accordion-content" data-target="#accordion-settings-1-1">
                                    Child Item 1.1
                                    <span class="accordion-icon ml-2 text-xl transition">+</span>
                                </button>
                            </h2>
                            <div id="accordion-settings-1-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                <span class="accordion-link">This is the content for Child Item 1.1.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2>
                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-settings-2">
                        Parent Item 2
                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                    </button>
                </h2>
                <div id="accordion-settings-2" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                    <div class="accordion mt-2" id="accordionChild2">
                        <div class="accordion-item">
                            <h2>
                                <button type="button" class="accordion-button accordion-content" data-target="#accordion-settings-2-1">
                                    Child Item 2.1
                                    <span class="accordion-icon ml-2 text-xl transition">+</span>
                                </button>
                            </h2>
                            <div id="accordion-settings-2-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                <span class="accordion-link">This is the content for Child Item 2.1.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-tab-content="contact" class="tab-content hidden">
            <div class="accordion" id="accordion-">
                <div class="accordion-item">
                    <h2>
                        <button type="button" class="accordion-button accordion-content" data-target="#accordion-contact-1">
                            Parent Item 1
                            <span class="accordion-icon ml-2 text-xl transition">+</span>
                        </button>
                    </h2>
                    <div id="accordion-contact-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                        <div class="accordion mt-2" id="accordionChild1">
                            <div class="accordion-item">
                                <h2>
                                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-contact-1-1">
                                        Child Item 1.1
                                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                                    </button>
                                </h2>
                                <div id="accordion-contact-1-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                    <span class="accordion-link">This is the content for Child Item 1.1.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2>
                        <button type="button" class="accordion-button accordion-content" data-target="#accordion-contact-2">
                            Parent Item 2
                            <span class="accordion-icon ml-2 text-xl transition">+</span>
                        </button>
                    </h2>
                    <div id="accordion-contact-2" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-4">
                        <div class="accordion mt-2" id="accordionChild2">
                            <div class="accordion-item">
                                <h2>
                                    <button type="button" class="accordion-button accordion-content" data-target="#accordion-contact-2-1">
                                        Child Item 2.1
                                        <span class="accordion-icon ml-2 text-xl transition">+</span>
                                    </button>
                                </h2>
                                <div id="accordion-contact-2-1" class="accordion-collapse transition-all duration-300 ease-in-out opacity-0 max-h-0 overflow-hidden px-4 pb-2">
                                    <span class="accordion-link">This is the content for Child Item 2.1.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function bindAccordionEvents(scope = document) {
        scope.querySelectorAll('.accordion-button').forEach(btn => {
            // Tránh gán trùng sự kiện
            btn.onclick = function() {
                const target = document.querySelector(this.getAttribute('data-target'));
                const icon = this.querySelector('.accordion-icon');
                const isOpen = target.classList.contains('opacity-100');
                if (isOpen) {
                    target.classList.remove('opacity-100', 'max-h-[500px]');
                    target.classList.add('opacity-0', 'max-h-0');
                    icon.textContent = '+';
                } else {
                    target.classList.remove('opacity-0', 'max-h-0');
                    target.classList.add('opacity-100', 'max-h-[500px]');
                    icon.textContent = '-';
                }
            };
        });
    }

    // Gán sự kiện cho tab đầu tiên khi load
    bindAccordionEvents();

    document.querySelectorAll('.class-tab').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('.class-tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
                content.classList.remove('container-content');
            });
            const tabName = this.getAttribute('data-tab');
            const activeTab = document.querySelector(`[data-tab-content="${tabName}"]`);
            activeTab.classList.remove('hidden');
            activeTab.classList.add('container-content');
            // Gán lại sự kiện accordion cho tab vừa mở
            bindAccordionEvents(activeTab);
        });
    });
</script>
<script src="https://unpkg.com/flowbite@2.5.1/dist/flowbite.min.js"></script>
