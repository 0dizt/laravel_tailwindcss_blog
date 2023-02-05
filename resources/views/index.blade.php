@extends('layouts.app')
@section('title')
Laravel Tailwindcss Blog - Joshua
@endsection
@section('content')

<div class="mx-auto max-w-container px-4 pt-4 sm:px-6 lg:flex lg:px-8">
    <div class="relative z-20 mx-auto max-w-[40rem] pb-16 pt-16 lg:mx-0 lg:w-[40rem] lg:max-w-none lg:flex-none lg:pb-24 lg:pr-4 lg:pt-20">
        <h1 class="text-base font-semibold leading-7 text-indigo-600">By the makers of Tailwind CSS</h1>
        <p class="mt-4 text-3xl font-extrabold tracking-[-0.04em] text-black sm:text-5xl sm:leading-[3.5rem]">Beautiful UI components, crafted with Tailwind CSS.</p>
        <div class="flex flex-wrap mt-4">
            <div class="flex items-center text-sm font-medium text-slate-500"><svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 flex-none stroke-current text-slate-400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 4.15h22.5l-2 20.5-9.25 4-9.25-4-2-20.5Z"></path>
                    <path d="M20.5 9.15H12v5.5h8.5v6l-4.25 2-4.25-2v-2.5"></path>
                </svg><span class="ml-2.5">HTML</span></div>
            <div class="flex items-center text-sm font-medium text-slate-500 ml-6"><svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 flex-none stroke-current text-slate-400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <ellipse cx="16" cy="16" rx="13" ry="5"></ellipse>
                    <ellipse cx="16" cy="16" rx="13" ry="5" transform="rotate(60 16 16)"></ellipse>
                    <ellipse rx="13" ry="5" transform="matrix(-.5 .86603 .86603 .5 16 16)"></ellipse>
                    <circle cx="16" cy="16" r="2"></circle>
                </svg><span class="ml-2.5">React</span></div>
            <div class="flex items-center text-sm font-medium text-slate-500 ml-6"><svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 flex-none stroke-current text-slate-400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19.924 5 16 11.644 12.075 5H3l13 23L29 5h-9.076Z"></path>
                    <path d="M19.879 5 16 11.26 12.121 5H8l8 13 8-13h-4.121Z"></path>
                </svg><span class="ml-2.5">Vue</span></div>
        </div>
        <p class="mt-4 text-base leading-7 text-slate-600">Over 500+ professionally designed, fully responsive, expertly crafted component examples you can drop into your Tailwind projects and customize to your heart’s content.</p>
        <div class="mt-8 flex gap-4"><a class="inline-flex justify-center rounded-lg text-sm font-semibold py-3 px-4 bg-slate-900 text-white hover:bg-slate-700" href="/preview"><span>Live preview <span aria-hidden="true" class="text-slate-400 sm:inline">→</span></span></a><a class="inline-flex justify-center rounded-lg text-sm font-semibold py-3 px-4 bg-white/0 text-slate-900 ring-1 ring-slate-900/10 hover:bg-white/25 hover:ring-slate-900/15 " href="/documentation"><span>Documentation <span aria-hidden="true" class="text-black/25 sm:inline">→</span></span></a></div>
    </div>
    <div class="relative z-10 mt-12 hidden select-none lg:flex">
        <div class="z-20 flex flex-col">
            <div class="relative p-4">
                <div class="absolute left-11 top-8 bottom-0 right-0 bg-slate-900/[0.03]"></div>
                <div class="pointer-events-auto relative z-10 w-[24.125rem] rounded-lg bg-white text-[0.8125rem] leading-5 text-slate-700 shadow-xl shadow-black/5 ring-1 ring-slate-700/10">
                    <div>
                        <div class="flex items-center py-2.5 px-3.5 text-slate-400"><svg class="mr-2 h-5 w-5 stroke-slate-500" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>Search projects...</div>
                        <div class="border-t border-slate-400/20 py-3 px-3.5">
                            <div class="mb-1.5 text-[0.6875rem] font-semibold text-slate-500">Recent searches</div>
                            <div class="flex items-center rounded-md p-1.5 bg-indigo-600 text-white"><svg class="mr-2.5 h-5 w-5 flex-none stroke-white" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>Tailwind Labs / Website Redesign</div>
                            <div class="flex items-center rounded-md p-1.5"><svg class="mr-2.5 h-5 w-5 flex-none stroke-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>Laravel LLC / Conference Branding</div>
                        </div>
                        <div class="border-t border-slate-400/20 py-3 px-3.5">
                            <div class="flex items-center rounded-md p-1.5"><svg class="mr-2.5 h-5 w-5 flex-none stroke-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>Add new file...</div>
                            <div class="flex items-center rounded-md p-1.5"><svg class="mr-2.5 h-5 w-5 flex-none stroke-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                                </svg>Add new folder...</div>
                            <div class="flex items-center rounded-md p-1.5"><svg class="mr-2.5 h-5 w-5 flex-none stroke-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                </svg>Add hashtag...</div>
                            <div class="flex items-center rounded-md p-1.5"><svg class="mr-2.5 h-5 w-5 flex-none stroke-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>Add label...</div>
                        </div>
                    </div>
                </div>
                <div class="z-0">
                    <div class="absolute -right-[95%] left-0 top-8 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                    <div class="absolute right-0 -top-2 -bottom-16 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                    <div class="absolute -right-2/3 top-px -mb-px flex h-8 items-end overflow-hidden">
                        <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                            <div class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                            <div class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative ml-6 flex items-center justify-end">
                <div class="relative p-4">
                    <div class="pointer-events-auto h-6 w-10 rounded-full p-1 ring-1 ring-inset transition duration-200 ease-in-out bg-slate-900/10 ring-slate-900/5">
                        <div class="h-4 w-4 rounded-full bg-white shadow-sm ring-1 ring-slate-700/10 transition duration-200 ease-in-out"></div>
                    </div>
                    <div class="z-0">
                        <div class="absolute left-0 -top-full bottom-2/3 w-px bg-slate-900/[0.2] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                    </div>
                </div>
                <div class="relative p-4">
                    <div class="pointer-events-auto relative inline-flex rounded-md bg-white text-[0.8125rem] font-medium leading-5 text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 hover:text-slate-900">
                        <div class="flex py-2 px-3"><svg class="mr-2.5 h-5 w-5 flex-none fill-slate-400">
                                <path d="M5 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v14l-5-2.5L5 18V4Z"></path>
                            </svg>Bookmark</div>
                        <div class="border-l border-slate-400/20 py-2 px-2.5">12k</div>
                    </div>
                    <div class="z-0">
                        <div class="absolute -top-12 right-0 -bottom-8 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                        <div class="absolute -top-12 left-0 -bottom-8 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                    </div>
                </div>
                <div class="relative p-4">
                    <div class="pointer-events-auto rounded-md bg-indigo-600 py-2 px-3 text-[0.8125rem] font-semibold leading-5 text-white hover:bg-indigo-500">Button A</div>
                </div>
                <div class="z-0">
                    <div class="absolute -left-12 -right-4 top-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                    <div class="absolute left-0 -right-4 bottom-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                </div>
            </div>
        </div>
        <div class="relative z-10 mt-8">
            <div class="relative p-4">
                <div class="w-[19.875rem] rounded-lg bg-white text-[0.8125rem] leading-5 text-slate-900 shadow-xl shadow-black/5 ring-1 ring-slate-700/10">
                    <div class="flex items-center p-4 pb-0"><img src="/img/avatar-3.jpg" alt="" class="h-10 w-10 flex-none rounded-full">
                        <div class="ml-4 flex-auto">
                            <div class="font-medium">Emily Selman</div>
                            <div class="mt-1 text-slate-500">Sent you an invite to connect.</div>
                        </div>
                    </div>
                    <div class="flex gap-3 p-4">
                        <div class="pointer-events-auto rounded-md bg-indigo-600 py-2 px-3 text-[0.8125rem] font-semibold leading-5 text-white hover:bg-indigo-500">Accept</div>
                        <div class="pointer-events-auto rounded-md py-2 px-4 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">Decline</div>
                    </div>
                </div>
                <div class="z-0">
                    <div class="absolute -right-4 -left-12 bottom-0 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                    <div class="absolute left-[21.875rem] -bottom-16 -top-2 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                </div>
            </div>
            <div class="relative p-4">
                <div class="w-[24.5rem] divide-y divide-slate-400/20 rounded-lg bg-white text-[0.8125rem] leading-5 text-slate-900 shadow-xl shadow-black/5 ring-1 ring-slate-700/10">
                    <div class="flex items-center p-4"><img src="/img/avatar-1.jpg" alt="" class="h-10 w-10 flex-none rounded-full">
                        <div class="ml-4 flex-auto">
                            <div class="font-medium">Leonard Krasner</div>
                            <div class="mt-1 text-slate-700">@leonardkrasner</div>
                        </div>
                        <div class="pointer-events-auto ml-4 flex-none rounded-md py-[0.3125rem] px-2 font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">View</div>
                    </div>
                    <div class="flex items-center p-4"><img src="/img/avatar-2.jpg" alt="" class="h-10 w-10 flex-none rounded-full">
                        <div class="ml-4 flex-auto">
                            <div class="font-medium">Floyd Miles</div>
                            <div class="mt-1 text-slate-700">@floydmiles</div>
                        </div>
                        <div class="pointer-events-auto ml-4 flex-none rounded-md py-[0.3125rem] px-2 font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">View</div>
                    </div>
                    <div class="p-4">
                        <div class="pointer-events-auto rounded-md py-2 px-4 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">View all</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
