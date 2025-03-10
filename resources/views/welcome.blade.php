<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <!-- component -->
    <div class="bg-gray-100 h-screen flex flex-col max-w-lg mx-auto">
        <div class="bg-blue-500 p-4 text-white flex justify-between items-center">
            <button id="login" class="hover:bg-blue-400 rounded-md p-1">
                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <circle cx="12" cy="6" r="4" stroke="#ffffff" stroke-width="1.5"></circle>
                        <path
                            d="M15 20.6151C14.0907 20.8619 13.0736 21 12 21C8.13401 21 5 19.2091 5 17C5 14.7909 8.13401 13 12 13C15.866 13 19 14.7909 19 17C19 17.3453 18.9234 17.6804 18.7795 18"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                    </g>
                </svg>
            </button>
            <span>{{ $user->name }} </span>
            <div class="relative inline-block text-left">
                <button id="setting" class="hover:bg-blue-400 rounded-md p-1">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.1395 12.0002C14.1395 13.1048 13.2664 14.0002 12.1895 14.0002C11.1125 14.0002 10.2395 13.1048 10.2395 12.0002C10.2395 10.8957 11.1125 10.0002 12.1895 10.0002C13.2664 10.0002 14.1395 10.8957 14.1395 12.0002Z"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.57381 18.1003L5.12169 12.8133C4.79277 12.2907 4.79277 11.6189 5.12169 11.0963L7.55821 5.89229C7.93118 5.32445 8.55898 4.98876 9.22644 5.00029H12.1895H15.1525C15.8199 4.98876 16.4477 5.32445 16.8207 5.89229L19.2524 11.0923C19.5813 11.6149 19.5813 12.2867 19.2524 12.8093L16.8051 18.1003C16.4324 18.674 15.8002 19.0133 15.1281 19.0003H9.24984C8.5781 19.013 7.94636 18.6737 7.57381 18.1003Z"
                                stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                </button>
                <div id="dropdown-content"
                    class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg p-2">
                    <a href="{{ route('login', 3) }}"
                        class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-200 rounded-md">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" class="mr-2"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M9 21H12M15 21H12M12 21V18M12 18H19C20.1046 18 21 17.1046 21 16V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V16C3 17.1046 3.89543 18 5 18H12Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>Login 3
                    </a>
                    <a href="{{ route('login', 1) }}"
                        class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-200 rounded-md">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" class="mr-2" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>Login 1
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-gray-800 hover:bg-gray-200 rounded-md">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" class="mr-2" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Warning / Info">
                                    <path id="Vector"
                                        d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 8V8.1L11.9502 8.1002V8H12.0498Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>More
                    </a>
                </div>
            </div>
        </div>

        <div class="flex-1 overflow-y-auto p-4 message-container" id="list-message">
            <div class="flex flex-col space-y-2 list-message">
                <!-- Messages go here -->

                @foreach ($messages as $message)
                    @if ($message->user_id == auth()->user()->id)
                        <div class="flex justify-end">
                            <div class="bg-blue-200 text-black p-2 rounded-lg max-w-xs">
                                {{ $message->message }}
                            </div>
                        </div>
                    @else
                        <div class="flex">
                            <div class="bg-gray-300 text-black p-2 rounded-lg max-w-xs">
                                {{ $message->message }}
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- Example Message -->


                <!-- Example Received Message -->


            </div>
        </div>

        <div class="bg-white p-4 flex items-center send-form" action="{{ route('send_message', request()->id) }}"
            method="POST">
            @csrf
            <input type="text" placeholder="Type your message..."
                class="flex-1 border rounded-full px-4 py-2 focus:outline-none" name="message">
            <button
                class="bg-blue-500 text-white rounded-full p-2 ml-2 hover:bg-blue-600 focus:outline-none submit-button">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M11.5003 12H5.41872M5.24634 12.7972L4.24158 15.7986C3.69128 17.4424 3.41613 18.2643 3.61359 18.7704C3.78506 19.21 4.15335 19.5432 4.6078 19.6701C5.13111 19.8161 5.92151 19.4604 7.50231 18.7491L17.6367 14.1886C19.1797 13.4942 19.9512 13.1471 20.1896 12.6648C20.3968 12.2458 20.3968 11.7541 20.1896 11.3351C19.9512 10.8529 19.1797 10.5057 17.6367 9.81135L7.48483 5.24303C5.90879 4.53382 5.12078 4.17921 4.59799 4.32468C4.14397 4.45101 3.77572 4.78336 3.60365 5.22209C3.40551 5.72728 3.67772 6.54741 4.22215 8.18767L5.24829 11.2793C5.34179 11.561 5.38855 11.7019 5.407 11.8459C5.42338 11.9738 5.42321 12.1032 5.40651 12.231C5.38768 12.375 5.34057 12.5157 5.24634 12.7972Z"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </button>


            <div role="status" style="display: none;" class="loading-button">
                <svg aria-hidden="true"
                    class="w-7 h-7 ml-2  text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>


        </div>

    </div>
    <script src="https://js.pusher.com/8.3.0/pusher.min.js"></script>

    <script>
        const button = document.getElementById('setting');
        const dropdown = document.getElementById('dropdown-content');

        button.addEventListener('click', function() {
            dropdown.classList.toggle('hidden');
        });
    </script>

    <script>
        const elem = document.getElementById('list-message');
        elem.scrollTop = elem.scrollHeight;

        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: 'ap1'
        });

        const channel = pusher.subscribe('my-box-{{ auth()->user()->id }}');
        channel.bind('messages', function(data) {
            const elementMyMessage = `
                            <div class="flex">
                                            <div class="bg-gray-300 text-black p-2 rounded-lg max-w-xs">
                                                ${data.message}
                                            </div>
                            </div>
                                    `
            $('.list-message').append(elementMyMessage);
            elem.scrollTop = elem.scrollHeight;
        });



        $(document).ready(function() {

            $('input[name="message"]').focus();

            $('.submit-button').click(function() {
                sendMessage();
            });
            $('input[name="message"]').keydown(function(event) {
                if (event.key === "Enter") {
                    sendMessage();
                }
            });
        });


        const sendMessage = ()=>{
            const token = $('input[name="_token"]').val();
                const message = $('input[name="message"]').val();
                const url = $('.send-form').attr('action');

                if (message) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            _token: token,
                            message: message
                        },
                        beforeSend: function() {
                            $('.submit-button').hide();
                            $('.loading-button').show();
                        },
                        success: function(response) {
                            $('.submit-button').show();
                            $('.loading-button').hide();
                            $('input[name="message"]').val("");
                            const elementMyMessage = `
                            <div class="flex justify-end">
                                            <div class="bg-blue-200 text-black p-2 rounded-lg max-w-xs">
                                                ${message}
                                            </div>
                            </div>
                                    `
                            $('.list-message').append(elementMyMessage);
                            elem.scrollTop = elem.scrollHeight;
                        }
                    });

                }
        }
    </script>
</body>

</html>
