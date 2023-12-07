<div class="suggest flex items-center justify-start no-wrap h-[56px] overflow-x-auto m-2">
    <div class="text-white bg-[#0f0f0f] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Tất cả
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Âm nhạc
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Danh sách kết hợp
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Trực tiếp
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Trò chơi
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Tin tức
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Toán học
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Bóng đá
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Đọc rap
    </div>
    <div class="bg-[rgba(0,0,0,0.05)] px-4 py-1 rounded-lg mx-2 cursor-pointer whitespace-nowrap">
        Lập trình
    </div>
</div>

<div class="videos-grid grid grid-cols-1 grid-rows-2 gap-1 w-[100%] text-[10px] sm:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-5">
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="group flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[calc(100%-60px)] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>

            <div class="video-actions relative">
                <svg class="button-dropdown group-hover:block hidden ml-[1px] cursor-pointer active:bg-slate-400 rounded-full p-[5px]" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                    <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                </svg>

                <div class="dropdown absolute hidden bg-white">
                    <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                            <path d="M21 16h-7v-1h7v1zm0-5H9v1h12v-1zm0-4H3v1h18V7zm-11 8-7-4v8l7-4z"></path>
                        </svg>
                        <span>Thêm vào danh sách chờ</span>
                    </div>
                    <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                            <path d="M14.97 16.95 10 13.87V7h2v5.76l4.03 2.49-1.06 1.7zM12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"></path>
                        </svg>
                        <span>Lưu vào danh sách xem sau</span>
                    </div>
                    <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                            <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-6H2v1h12V7zM2 12h8v-1H2v1zm0 4h8v-1H2v1z"></path>
                        </svg>
                        <span>Lưu vào danh sách phát</span>
                    </div>
                    <div class="sharing-button w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer relative">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false">
                            <path d="M15 5.63 20.66 12 15 18.37V14h-1c-3.96 0-7.14 1-9.75 3.09 1.84-4.07 5.11-6.4 9.89-7.1l.86-.13V5.63M14 3v6C6.22 10.13 3.11 15.33 2 21c2.78-3.97 6.44-6 12-6v6l8-9-8-9z"></path>
                        </svg>
                        <span>Chia sẻ</span>
                    </div>
                    <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false" >
                            <path d="M18.71 6C20.13 7.59 21 9.69 21 12c0 4.97-4.03 9-9 9-2.31 0-4.41-.87-6-2.29L18.71 6zM3 12c0-4.97 4.03-9 9-9 2.31 0 4.41.87 6 2.29L5.29 18C3.87 16.41 3 14.31 3 12zm9-10c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z" fill-rule="evenodd"></path>
                        </svg>
                        <span>Không quan tâm</span>
                    </div>
                    <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" >
                            <g>
                                <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                            </g>
                        </svg>
                        <span>Không đề xuất kênh này</span>
                    </div>
                    <div class="w-[200px] flex space-x-2 items-center px-4 py-1 hover:bg-slate-300 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" >
                            <path d="m13.18 4 .24 1.2.16.8H19v7h-5.18l-.24-1.2-.16-.8H6V4h7.18M14 3H5v18h1v-9h6.6l.4 2h7V5h-5.6L14 3z"></path>
                        </svg>
                        <span>Báo vi phạm</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>
    <div class="video-item col-span-1 flex flex-col m-2">
        <img class="w-[100%] rounded-lg hover:rounded-none cursor-pointer" src="{{asset('img/hq720.webp')}}" alt="" />
        <div class="flex mt-4 w-[100%]">
            <div class="w-[36px] mr-2 cursor-pointer">
                <img class="w-[36px] rounded-full" src="{{asset('img/avt.jpg')}}" alt="" />
            </div>
            <div class="w-[100%] cursor-pointer">
                <div class="line-clamp-2 overflow-hidden font-semibold">
                    Từng Quen - Wren Evans, Sài Gòn Tôi Mưa, Xin Lỗi Vì Đã Yêu
                    Nhau.. Playlist Lofi Chill Hay Hot Tiktok
                </div>
                <div class="text-gray-500">Bản tình ca</div>
                <div class="text-gray-500 text-[8px]">
                    1,2 triệu lượt xem • 8 tuần trước
                </div>
            </div>
        </div>
    </div>


    <div class="short-container col-span-full row-start-3 row-end-4 inline-block w-[100%]">
        <div class="sm:flex items-center my-4 space-x-2 text-3xl font-bold shorts w-[100%]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" class="inline">
                <g>
                    <path d="M17.77,10.32l-1.2-.5L18,9.06a3.74,3.74,0,0,0-3.5-6.62L6,6.94a3.74,3.74,0,0,0,.23,6.74l1.2.49L6,14.93a3.75,3.75,0,0,0,3.5,6.63l8.5-4.5a3.74,3.74,0,0,0-.23-6.74Z" fill="red"></path>
                    <polygon points="10 14.65 15 12 10 9.35 10 14.65" fill="#fff"></polygon>
                </g>
            </svg>
            <h1 class="inline">Shorts</h1>
        </div>

        <div class="shorts-grid gap-4 grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
            <div class="short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="hidden short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="hidden short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="hidden short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="hidden short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
            <div class="hidden short-item px-2 short h-auto cursor-pointer">
                <img src="{{asset('img/short.webp')}}" class="rounded-xl w-[100%] h-auto" />
                <div class="flex flex-col mt-2 space-y-1 short-detail">
                    <h3 class="font-bold line-clamp-1">Spot the hidden people for $10,000</h3>
                    <p>10 Tr lượt xem</p>
                </div>
            </div>
        </div>

        <div class="show-more-short text-center my-4 border-t-1 border-b-1 block relative">
            <div class="show-more-short-button border text-lg px-16 py-2 rounded-l-full rounded-r-full cursor-pointer bg-white hover:bg-slate-300 inline-block mx-auto no-wrap">
                <span class="mr-2">Hiện thêm</span>
                <i class="ti-angle-down"></i>
            </div>
            <div class="show-less-short-button hidden border text-lg px-16 py-2 rounded-l-full rounded-r-full cursor-pointer bg-white hover:bg-slate-300 inline-block mx-auto no-wrap">
                <span class="mr-2">Ẩn bớt</span>
                <i class="ti-angle-up"></i>
            </div>
        </div>
    </div>
</div>
<!-- End videos grid -->