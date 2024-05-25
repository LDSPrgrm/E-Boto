<x-app-layout>
    <div id="addVoterModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4 text-center">Add New Voter</h2>
            <form method="post" action="{{ route('add_new_voter') }}" id="addVoterForm" class="space-y-4 ">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_first_name" class="block font-bold">First Name:</label>
                        <input type="text" id="new_first_name" name="first_name" autocomplete="on" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="new_middle_name" class="block font-bold">Middle Name:</label>
                        <input type="text" id="new_middle_name" name="middle_name" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_last_name" class="block font-bold">Last Name:</label>
                        <input type="text" id="new_last_name" name="last_name" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="new_suffix" class="block font-bold">Suffix:</label>
                        <input type="text" id="new_suffix" name="suffix" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_sex" class="block font-bold">Sex:</label>
                        <select id="new_sex" name="sex" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <label for="new_civilStatus" class="block font-bold">Civil Status:</label>
                        <select id="new_civilStatus" name="civil_status" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_birthdate" class="block font-bold">Birthdate:</label>
                        <input type="date" id="new_birthdate" name="birthdate" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="new_email" class="block font-bold">Email:</label>
                        <input type="email" id="new_email" name="email" autocomplete="on" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_province" class="block font-bold">Province:</label>
                        <input type="text" id="new_province" name="province" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="new_municipality" class="block font-bold">Municipality:</label>
                        <input type="text" id="new_municipality" name="municipality" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_barangay" class="block font-bold">Baranggay:</label>
                        <input type="text" id="new_barangay" name="barangay" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="new_address" class="block font-bold">House No. / Street / Subdivision:</label>
                        <input type="text" id="new_address" name="address" autocomplete="on" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_idIssuanceDate" class="block font-bold">ID Issuance Date:</label>
                        <input type="date" id="new_idIssuanceDate" name="id_issuance_date" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="new_idValidUntil" class="block font-bold">ID Valid Until:</label>
                        <input type="date" id="new_idValidUntil" name="id_valid_until" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="new_password" class="block font-bold">Temporary Password:</label>
                        <input type="password" id="new_password" name="password" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                    <div>
                        <label for="confirm_password" class="block font-bold">Confirm Temporary Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                    </div>
                </div>
                <div>
                    <button onclick="closeAddVoterModal()" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700 float-left">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 float-right">
                        Add Voter
                    </button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assign Candidates') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="flex justify-between items-center px-6 py-6">
                    <button onclick="openAddVoterModal()" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add a New Voter</button>
                    
                    <div class="flex justify-end items-center">
                        <input type="text" id="search" name="search" placeholder="Search..." class="px-3 py-1 border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                        <button onclick="search()" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">Search</button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                        <table id="dataTable" class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        #
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Voter's ID Number
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Sex
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Birthdate
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Civil Status
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Province
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Municipality
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Baranggay
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                        House No. / Street / Subdivision
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        ID Issuance Date
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        ID Valid Until
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Candidate
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Position Type
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Position
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider text-center">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach($voters as $voter)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $counter++ }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->_id }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->first_name }} {{ $voter->middle_name }} {{ $voter->last_name }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->sex }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->birthdate ? $voter->birthdate->toDateTime()->format('Y-m-d') : '' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->civil_status }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->province }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->municipality }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->baranggay }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->house_no_street_subdivision ?? '' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->id_issuance_date ? $voter->id_issuance_date->toDateTime()->format('Y-m-d') : '' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->id_valid_until ? $voter->id_valid_until->toDateTime()->format('Y-m-d') : '' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap flex justify-center items-center">
                                            @if($voter->isCandidate)
                                                <div class="text-sm text-gray-900 dark:text-gray-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                </div>
                                            @else
                                                <div class="text-sm text-gray-900 dark:text-gray-200">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->position_type }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-gray-200">{{ $voter->position }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button onclick="showUserInfo('{{ $voter->_id }}')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                                Show Info
                                            </button>
                                            <div id="overlay_{{ $voter->_id }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                                                <div id="userInfo_{{ $voter->_id }}" class="bg-white p-6 rounded-md shadow-lg lg:w-1/4">
                                                    <div class="flex justify-end mb-4">
                                                        <button onclick="closeUserInfo('{{ $voter->_id }}')" class="text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800">
                                                            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.708 6.708a1 1 0 011.414 0L12 10.586l3.88-3.88a1 1 0 111.415 1.415L13.414 12l3.88 3.88a1 1 0 11-1.415 1.415L12 13.414l-3.88 3.88a1 1 0 01-1.415-1.415L10.586 12 6.708 8.122a1 1 0 010-1.414z"/></svg>
                                                        </button>
                                                    </div>
                                                    <h2 class="text-xl font-bold mb-4 text-center">Profile Information</h2>
                                                    <form method="post" action="{{ route('save_candidate_status', [$voter->_id]) }}" class="max-w-md mx-auto bg-white rounded px-8 pt-6 pb-8 mb-4" id="voterForm">
                                                        @csrf
                                                        <input type="hidden" name="_id" value="{{ $voter->_id }}">
                                                        <div class="mb-4">
                                                            <label class="block text-gray-700 text-lg font-bold mb-2" for="id">
                                                                ID:
                                                            </label>
                                                            <p class="text-gray-700 text-base">{{ $voter->_id }}</p>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="block text-gray-700 text-lg font-bold mb-2" for="full_name">
                                                                Full Name:
                                                            </label>
                                                            <p class="text-gray-700 text-base">{{ $voter->first_name }} {{ $voter->middle_name }} {{ $voter->last_name }}</p>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="block text-gray-700 text-lg font-bold mb-2" for="last_name">
                                                                Address:
                                                            </label>
                                                            <p class="text-gray-700 text-base">{{ $voter->baranggay }}, {{ $voter->municipality }}, {{ $voter->province }}</p>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="block text-gray-700 text-lg font-bold mb-2" for="position_type">
                                                                Position Type:
                                                            </label>
                                                            <div class="mb-4">
                                                                <div class="mb-2">
                                                                    <input type="radio" id="presidential" name="position_type" value="Presidential" class="mr-1" data-show="presidentialPositions">
                                                                    <label for="presidential" class="mr-1">Presidential</label>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <input type="radio" id="provincial" name="position_type" value="Provincial" class="mr-1" data-show="provincialPositions">
                                                                    <label for="provincial" class="mr-1">Provincial</label>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <input type="radio" id="municipal" name="position_type" value="Municipal" class="mr-1" data-show="municipalPositions">
                                                                    <label for="municipal" class="mr-1">Municipal</label>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <input type="radio" id="barangay" name="position_type" value="Baranggay" class="mr-1" data-show="barangayPositions">
                                                                    <label for="barangay">Baranggay</label>
                                                                </div>
                                                                <div class="flex justify-end">
                                                                    <button type="button" onclick="clearSelection()" class=" hover:bg-gray-400 hover:text-white text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                                                        Clear Selection
                                                                    </button>
                                                                </div>                                                                                                                              
                                                            </div>
                                                        </div>
                                                        <div id="positionFields" class="mb-4"></div>
                                                        <div class="text-center">
                                                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    // Function to open the add voter modal
    function openAddVoterModal() {
        document.getElementById('addVoterModal').classList.remove('hidden');
    }

    // Function to close the add voter modal
    function closeAddVoterModal() {
        document.getElementById('addVoterModal').classList.add('hidden');
    }

    // Function to handle form submission for adding a new voter
    document.getElementById('addVoterForm').addEventListener('submit', function(event) {
        
        // Here you can collect the form data and process it further, like sending it to the server
        // For simplicity, let's just close the modal for now
        closeAddVoterModal();
    });

    function search() {
        var input, filter, table, tr, th, td, i, j, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        th = table.getElementsByTagName("th");

        for (i = 1; i < tr.length; i++) {
            var found = false;
            for (j = 0; j < tr[i].cells.length; j++) {
                td = tr[i].cells[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                    }
                }
            }
            if (found) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    function showUserInfo(userId) {
        var overlay = document.getElementById('overlay_' + userId);
        overlay.classList.remove("hidden");
    }

    function closeUserInfo(userId) {
        var overlay = document.getElementById('overlay_' + userId);
        overlay.classList.add('hidden');
    }

    function clearSelection() {
        const positionRadios = document.querySelectorAll('input[name="position_type"]');
        positionRadios.forEach(radio => {
            radio.checked = false;
            const positionFields = radio.closest('form').querySelector('#positionFields');
            positionFields.innerHTML = '';
        });
    }

    // Hide overlay when clicking outside of user information
    document.addEventListener("click", function(event) {
        const overlay = document.getElementById("overlay");
        if (event.target === overlay) {
            overlay.classList.add("hidden");
        }
    });

    const positionTypeRadios = document.querySelectorAll('input[name="position_type"]');
    positionTypeRadios.forEach(radio => {
        radio.addEventListener('change', () => {
            const selectedValue = radio.value;
            const fieldMapping = {
                Presidential: ['President', 'Vice President', 'Senator'],
                Provincial: ['Governor', 'Vice Governor', 'Sangguniang Panglalawigan'],
                Municipal: ['Mayor', 'Vice Mayor', 'Sangguniang Bayan'],
                Baranggay: ['Captain', 'Sangguniang Baranggay']
            };

            const positions = fieldMapping[selectedValue];
            const positionFields = radio.closest('form').querySelector('#positionFields');
            
            if (positions) {
                const positionFieldsHTML = positions.map(position => `
                    <div class="mb-2">
                        <input type="radio" id="${position}" name="position" value="${position}" class="mr-1">
                        <label for="${position}" class="mr-1">${position}</label>
                    </div>
                `).join('');
                positionFields.innerHTML = '<label class="block text-gray-700 text-lg font-bold mb-2" for="position_type">Position:</label>' + positionFieldsHTML;
            } else {
                positionFields.innerHTML = '';
            }
        });
    });
</script>