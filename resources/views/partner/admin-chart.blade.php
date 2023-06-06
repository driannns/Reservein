<x-partner-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind Admin Template</title>
        <meta name="author" content="David Grzyb">
        <meta name="description" content="">

        <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

            .font-family-karla {
                font-family: karla;
            }

            .bg-sidebar {
                background: #3d68ff;
            }

            .cta-btn {
                color: #3d68ff;
            }

            .upgrade-btn {
                background: #1947ee;
            }

            .upgrade-btn:hover {
                background: #0038fd;
            }

            .active-nav-link {
                background: #1947ee;
            }

            .nav-item:hover {
                background: #1947ee;
            }

            .account-link:hover {
                background: #3d68ff;
            }

        </style>
    </head>

    <div id="container" class="flex text-[#051036]">


    <div id="side-bar" class="w-2/12 bg-[#EAEAED] pt-10 pl-10">
            <div class="font-medium text-xl">
                <a class="w-fit" href="">
                    <p class="w-fit">
                        Admin Page
                    </p>
                </a>
            </div>
            <button id="dropdownBottomButton" data-dropdown-toggle="dropdownBottom" data-dropdown-placement="bottom"
                class="focus:outline-nonepy-2.5 text-center inline-flex items-center mt-5" type="button">Dropdown bottom
                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg></button>

            <!-- Dropdown menu -->
            <div id="dropdownBottom" class="z-10 divide-y divide-gray-100 w-2/12 pl-10">
                <ul class="py-2" aria-labelledby="dropdownBottomButton">
                    <li>
                        <a href="{{ route('partnerDashboard') }}" class="block px-4 py-2">Properties</a>
                    </li>
                    <li>
                        <a href="{{ route('notification') }}" class="block px-4 py-2">Notification</a>
                    </li>
                    <li>
                        <a href="{{ route('partnerHistory')}}"><button type="submit" class="block px-4 py-2">Order
                                History</button></a>
                    </li>
                    <li>
                        <a href="{{ route('dashboardChart') }}" class="block px-4 py-2">
                            <img src="file:///C:/Users/asus/Downloads/Fill%201.svg" alt=""> Dashboard Chart</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-10/12 flex flex-col h-screen">
            <!-- Desktop Header -->


            <div class="w-full border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    <h1 class="text-3xl text-black pb-6">Dashboard</h1>

                    <div class="flex flex-wrap mt-6">
                        <div class="w-8/12 pr-0 lg:pr-2">
                            <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-plus mr-3"></i> Monthly Order
                            </p>
                            <div class="p-6 bg-white">
                                <canvas id="chartOne" width="400" height="200"></canvas>
                            </div>
                        </div>
                        <!-- <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                            <p class="text-xl pb-3 flex items-center">
                                <i class="fas fa-check mr-3"></i> Resolved Reports
                            </p>
                            <div class="p-6 bg-white">
                                <canvas id="chartTwo" width="400" height="200"></canvas>
                            </div>
                        </div> -->
                    </div>
                </main>
            </div>

        </div>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var sites = {{ Js::from($months) }};
        // console.log(sites);
        var dataValues = Object.values(sites);
        // console.log(dataValues);
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                    'September', 'October', 'November', 'December'
                ],
                datasets: [{
                    label: '# orders',
                    data: dataValues,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>
</x-partner-layout>
