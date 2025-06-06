<?php
/**
 * Admin welcome page
 *
 * @package Yuki
 */

use LottaFramework\Utils;

$customizer_items = [
	[
		'label'    => __( 'Site Logo', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.656 8h-29.312v20.544c0 1.184 0.896 2.112 1.984 2.112h25.344c1.088 0 1.984-0.928 1.984-2.112v-20.544zM30.656 6.656v-1.856c0-1.184-0.896-2.144-1.984-2.144h-25.344c-1.088 0-1.984 0.96-1.984 2.144v1.856h29.312zM32 28.544c0 1.888-1.472 3.456-3.328 3.456h-25.344c-1.856 0-3.328-1.568-3.328-3.456v-23.744c0-1.92 1.472-3.456 3.328-3.456h25.344c1.856 0 3.328 1.536 3.328 3.456v23.744zM4 4.672c0 0.352-0.288 0.672-0.672 0.672s-0.672-0.32-0.672-0.672 0.32-0.672 0.672-0.672 0.672 0.288 0.672 0.672M6.656 4.672c0 0.352-0.288 0.672-0.64 0.672s-0.672-0.32-0.672-0.672 0.288-0.672 0.672-0.672 0.64 0.288 0.64 0.672M9.344 4.672c0 0.352-0.288 0.672-0.672 0.672s-0.672-0.32-0.672-0.672 0.288-0.672 0.672-0.672c0.384 0 0.672 0.288 0.672 0.672M5.728 17.408h0.352c0.192 0 0.384 0.192 0.384 0.416v3.296c0 0.224 0.192 0.384 0.416 0.384h0.96c0.224 0 0.416 0.192 0.416 0.416v0.32c0 0.224-0.16 0.384-0.416 0.384 0 0 0 0 0 0h-2.080c-0.224 0-0.416-0.16-0.416-0.384v-4.416c0-0.224 0.16-0.416 0.384-0.416zM13.184 20c0-0.512-0.16-0.928-0.448-1.248-0.32-0.288-0.736-0.448-1.248-0.448s-0.896 0.16-1.216 0.448c-0.32 0.32-0.48 0.736-0.48 1.248s0.16 0.928 0.48 1.248c0.32 0.288 0.704 0.448 1.216 0.448s0.928-0.16 1.248-0.448c0.32-0.32 0.448-0.736 0.448-1.248zM9.504 21.92c-0.544-0.512-0.832-1.152-0.832-1.92s0.288-1.408 0.832-1.92 1.216-0.736 2.016-0.736 1.472 0.256 2.016 0.736c0.544 0.512 0.8 1.152 0.8 1.92s-0.256 1.408-0.8 1.92c-0.544 0.48-1.216 0.736-2.016 0.736s-1.472-0.256-2.016-0.736zM14.912 20c0-0.768 0.288-1.408 0.832-1.92 0.544-0.48 1.216-0.736 2.016-0.736 0.576 0 1.12 0.128 1.6 0.416 0.448 0.288 0.8 0.736 0.896 1.12 0.032 0.256-0.256 0.32-0.704 0.32-0.128 0-0.256-0.096-0.352-0.224-0.256-0.448-0.864-0.704-1.472-0.704-0.512 0-0.896 0.16-1.216 0.48-0.32 0.288-0.48 0.704-0.48 1.248 0 0.512 0.16 0.928 0.48 1.216 0.32 0.32 0.704 0.48 1.152 0.48s0.8-0.128 1.088-0.32c0.288-0.192 0.384-0.384 0.448-0.64h-1.44c-0.192 0-0.384-0.16-0.384-0.384 0 0 0-0.032 0-0.032v-0.224c0.032-0.192 0.192-0.384 0.416-0.384l2.208 0.032c0.224 0 0.384 0.16 0.384 0.416v0.32c-0.096 0.576-0.32 1.088-0.832 1.504-0.512 0.448-1.12 0.64-1.888 0.64s-1.408-0.224-1.952-0.736c-0.544-0.48-0.8-1.12-0.8-1.888zM25.536 20c0-0.512-0.16-0.928-0.48-1.248-0.32-0.288-0.736-0.448-1.216-0.448-0.512 0-0.928 0.16-1.248 0.448-0.32 0.32-0.448 0.736-0.448 1.248s0.16 0.928 0.448 1.248c0.32 0.288 0.736 0.448 1.248 0.448 0.48 0 0.896-0.16 1.216-0.448 0.32-0.32 0.48-0.736 0.48-1.248zM21.824 21.92c-0.544-0.512-0.8-1.152-0.8-1.92s0.256-1.408 0.832-1.92 1.184-0.736 1.984-0.736c0.8 0 1.472 0.256 2.016 0.736 0.544 0.512 0.832 1.152 0.832 1.92s-0.288 1.408-0.832 1.92c-0.544 0.48-1.216 0.736-2.016 0.736s-1.472-0.256-2.016-0.736zM27.328 25.344h-22.656c-0.384 0-0.672-0.32-0.672-0.672s0.288-0.672 0.672-0.672h22.656c0.384 0 0.672 0.288 0.672 0.672s-0.288 0.672-0.672 0.672zM27.328 16h-22.656c-0.384 0-0.672-0.288-0.672-0.672s0.288-0.672 0.672-0.672h22.656c0.384 0 0.672 0.288 0.672 0.672s-0.288 0.672-0.672 0.672z"></path></svg>',
		'location' => 'yuki_header:logo',
	],
	[
		'label'    => __( 'Colors Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 255.1C512 256.9 511.1 257.8 511.1 258.7C511.6 295.2 478.4 319.1 441.9 319.1H344C317.5 319.1 296 341.5 296 368C296 371.4 296.4 374.7 297 377.9C299.2 388.1 303.5 397.1 307.9 407.8C313.9 421.6 320 435.3 320 449.8C320 481.7 298.4 510.5 266.6 511.8C263.1 511.9 259.5 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256V255.1zM96 255.1C78.33 255.1 64 270.3 64 287.1C64 305.7 78.33 319.1 96 319.1C113.7 319.1 128 305.7 128 287.1C128 270.3 113.7 255.1 96 255.1zM128 191.1C145.7 191.1 160 177.7 160 159.1C160 142.3 145.7 127.1 128 127.1C110.3 127.1 96 142.3 96 159.1C96 177.7 110.3 191.1 128 191.1zM256 63.1C238.3 63.1 224 78.33 224 95.1C224 113.7 238.3 127.1 256 127.1C273.7 127.1 288 113.7 288 95.1C288 78.33 273.7 63.1 256 63.1zM384 191.1C401.7 191.1 416 177.7 416 159.1C416 142.3 401.7 127.1 384 127.1C366.3 127.1 352 142.3 352 159.1C352 177.7 366.3 191.1 384 191.1z"/></svg>',
		'location' => 'yuki_colors',
	],
	[
		'label'    => __( 'Typography Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 416h-25.81L253.1 52.76c-4.688-12.47-16.57-20.76-29.91-20.76s-25.34 8.289-30.02 20.76L57.81 416H32c-17.67 0-32 14.31-32 32s14.33 32 32 32h96c17.67 0 32-14.31 32-32s-14.33-32-32-32H126.2l17.1-48h159.6l17.1 48H320c-17.67 0-32 14.31-32 32s14.33 32 32 32h96c17.67 0 32-14.31 32-32S433.7 416 416 416zM168.2 304L224 155.1l55.82 148.9H168.2z"/></svg>',
		'location' => 'yuki_content:yuki_content_typography',
	],
	[
		'label'    => __( 'Menu Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.656 5.344h-29.312c-0.384 0-0.672 0.288-0.672 0.64v4c0 0.384 0.288 0.672 0.672 0.672h8.672v15.328c0 0.384 0.288 0.672 0.64 0.672h13.344c0.384 0 0.672-0.288 0.672-0.672v-15.328h5.984c0.384 0 0.672-0.288 0.672-0.672v-4c0-0.352-0.288-0.64-0.672-0.64zM20.672 9.344h-9.344v-2.688h9.344v2.688zM2.016 6.656h8v2.688h-8v-2.688zM23.328 25.344h-12v-14.688h12v14.688zM30.016 9.344h-8v-2.688h8v2.688zM13.344 13.344c-0.384 0-0.672 0.288-0.672 0.64s0.288 0.672 0.672 0.672h8c0.352 0 0.672-0.288 0.672-0.672s-0.32-0.64-0.672-0.64h-8zM21.344 17.344h-8c-0.384 0-0.672 0.288-0.672 0.64s0.288 0.672 0.672 0.672h8c0.352 0 0.672-0.288 0.672-0.672s-0.32-0.64-0.672-0.64zM21.344 21.344h-8c-0.384 0-0.672 0.288-0.672 0.64s0.288 0.672 0.672 0.672h8c0.352 0 0.672-0.288 0.672-0.672s-0.32-0.64-0.672-0.64z"></path></svg>',
		'location' => 'yuki_header',
	],
	[
		'label'    => __( 'Homepage Builder', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"><path d="M9.344 5.984h-8c-0.384 0-0.672 0.32-0.672 0.672v8c0 0.384 0.288 0.672 0.672 0.672h8c0.352 0 0.672-0.288 0.672-0.672v-8c0-0.352-0.32-0.672-0.672-0.672zM8.672 13.984h-6.656v-6.656h6.656v6.656zM20 5.984h-8c-0.352 0-0.672 0.32-0.672 0.672v8c0 0.384 0.32 0.672 0.672 0.672h8c0.384 0 0.672-0.288 0.672-0.672v-8c0-0.352-0.288-0.672-0.672-0.672zM19.328 13.984h-6.656v-6.656h6.656v6.656zM30.656 5.984h-8c-0.352 0-0.64 0.32-0.64 0.672v8c0 0.384 0.288 0.672 0.64 0.672h8c0.384 0 0.672-0.288 0.672-0.672v-8c0-0.352-0.288-0.672-0.672-0.672zM30.016 13.984h-6.688v-6.656h6.688v6.656zM9.344 16.672h-8c-0.384 0-0.672 0.288-0.672 0.672v8c0 0.352 0.288 0.64 0.672 0.64h8c0.352 0 0.672-0.288 0.672-0.64v-8c0-0.384-0.32-0.672-0.672-0.672zM8.672 24.672h-6.656v-6.688h6.656v6.688zM20 16.672h-8c-0.352 0-0.672 0.288-0.672 0.672v8c0 0.352 0.32 0.64 0.672 0.64h8c0.384 0 0.672-0.288 0.672-0.64v-8c0-0.384-0.288-0.672-0.672-0.672zM19.328 24.672h-6.656v-6.688h6.656v6.688zM30.656 16.672h-8c-0.352 0-0.64 0.288-0.64 0.672v8c0 0.352 0.288 0.64 0.64 0.64h8c0.384 0 0.672-0.288 0.672-0.64v-8c0-0.384-0.288-0.672-0.672-0.672zM30.016 24.672h-6.688v-6.688h6.688v6.688z"></path></svg>',
		'location' => 'static_front_page:yuki_homepage_builder_section',
	],
	[
		'label'    => __( 'Header Builder', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28.672 1.984c1.728 0 3.2 1.216 3.328 2.816v22.272c0 1.6-1.344 2.944-3.072 2.944h-25.6c-1.728 0-3.2-1.216-3.328-2.816v-22.272c0-1.6 1.344-2.944 3.072-2.944h25.6zM30.656 8.672h-29.312v18.4c0 0.8 0.8 1.6 1.856 1.6h25.472c1.056 0 1.856-0.672 1.984-1.472v-18.528zM28.672 3.328h-25.344c-1.056 0-1.856 0.672-1.984 1.472v2.528h29.312v-2.4c0-0.8-0.8-1.6-1.856-1.6h-0.128z"></path></svg>',
		'location' => 'yuki_header',
	],
	[
		'label'    => __( 'Footer Builder', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28.672 1.984c1.856 0 3.328 1.344 3.328 2.944v22.016c0 1.728-1.472 2.912-3.328 2.912h-25.344c-1.856 0-3.328-1.312-3.328-2.912v-22.016c0-1.728 1.472-2.944 3.328-2.944h25.344zM30.656 23.328h-29.312v3.744c0 0.928 0.928 1.6 1.984 1.6h25.344c1.056 0 1.984-0.8 1.984-1.6v-3.744zM28.672 3.328h-25.344c-1.056 0-1.984 0.8-1.984 1.6v17.056h29.312v-17.056c0-0.8-0.928-1.6-1.984-1.6z"></path></svg>',
		'location' => 'yuki_footer',
	],
	[
		'label'    => __( 'Article Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28.672 1.344c1.76 0 3.2 1.312 3.328 2.976v24.448c0 1.728-1.376 3.104-3.104 3.232h-25.568c-1.76 0-3.2-1.312-3.328-3.008v-24.448c0-1.696 1.376-3.104 3.136-3.2h25.536zM30.656 8h-29.312v20.8c0 0.96 0.768 1.76 1.792 1.856h25.536c1.024 0 1.888-0.736 1.984-1.696v-20.96zM20 28.544c-0.16 0-0.288-0.064-0.416-0.16l-0.128-0.128-0.032 0.064c-0.064 0.096-0.16 0.16-0.256 0.16l-0.128 0.032-0.096 0.032h-2.688c-0.32 0-0.576-0.256-0.64-0.544v-5.472c0-1.472 1.12-2.688 2.592-2.784h2.080l-0.416-2.56c0-1.12 0.8-2.048 1.888-2.24h0.16l0.224-0.032c1.184 0 2.144 0.928 2.24 2.176v0.192l-0.384 2.432h1.856c1.44 0 2.592 1.056 2.784 2.4l0.032 0.192v5.536c0 0.352-0.224 0.608-0.544 0.672l-0.128 0.032h-8zM27.328 24.256h-10.4v2.944h1.472l0.416-1.632c0.16-0.576 0.896-0.672 1.184-0.224l0.064 0.096 0.032 0.128 0.416 1.632h1.504v-1.472c0-0.384 0.288-0.672 0.64-0.672s0.608 0.256 0.672 0.544v1.6h1.344v-1.472c0-0.384 0.288-0.672 0.672-0.672 0.32 0 0.576 0.256 0.64 0.544l0.032 0.128v1.472h1.312v-2.944zM17.344 10.656c0.32 0 0.576 0.256 0.64 0.544l0.032 0.128v3.168c0 0.864-1.216 0.896-1.344 0.128l-0.032-0.224c-0.032-0.256-0.224-0.448-0.48-0.48l-0.096-0.032h-3.776v9.504c0 0.256 0.16 0.48 0.384 0.544l0.128 0.032 0.256 0.032c0.64 0.128 0.672 1.056 0.096 1.28l-0.096 0.032-0.16 0.032h-4.448l-0.128-0.032c-0.704-0.128-0.704-1.184 0-1.312h0.256c0.224-0.064 0.416-0.256 0.48-0.48v-9.6h-3.776c-0.256 0-0.48 0.16-0.544 0.384l-0.032 0.096-0.032 0.256c-0.128 0.704-1.184 0.704-1.312 0v-3.328c0-0.32 0.224-0.608 0.544-0.64l0.096-0.032h13.344zM16.672 12h-12v0.672l0.064-0.032 0.16-0.032 0.192-0.032h4.608c0.352 0 0.608 0.224 0.672 0.544v10.272c0 0.128 0 0.256-0.032 0.384l-0.032 0.16-0.032 0.064h0.768v-0.064l-0.064-0.16v-0.192l-0.032-0.192v-10.144c0-0.352 0.256-0.608 0.544-0.672h4.576c0.096 0 0.256 0 0.352 0.032l0.192 0.032 0.064 0.032v-0.672zM22.144 16.256c-0.48 0-0.864 0.352-0.928 0.704l-0.032 0.128 0.544 3.2c0.064 0.352-0.192 0.704-0.544 0.736l-0.128 0.032h-2.656c-0.768 0-1.376 0.576-1.44 1.312l-0.032 0.16v0.416h10.4v-0.416c0-0.704-0.48-1.28-1.152-1.408l-0.32-0.064h-2.656c-0.384 0-0.672-0.288-0.672-0.64l0.032-0.128 0.512-3.104c0-0.512-0.416-0.928-0.928-0.928zM28.672 2.656h-25.344c-1.024 0-1.888 0.768-1.984 1.728v2.272h29.312v-2.112c0-0.96-0.768-1.792-1.792-1.888h-0.192zM4 4.672c0 0.352-0.288 0.672-0.672 0.672s-0.672-0.32-0.672-0.672 0.32-0.672 0.672-0.672 0.672 0.288 0.672 0.672M6.656 4.672c0 0.352-0.288 0.672-0.64 0.672s-0.672-0.32-0.672-0.672 0.288-0.672 0.672-0.672 0.64 0.288 0.64 0.672M9.344 4.672c0 0.352-0.288 0.672-0.672 0.672s-0.672-0.32-0.672-0.672 0.288-0.672 0.672-0.672c0.384 0 0.672 0.288 0.672 0.672"></path></svg>',
		'location' => 'yuki_content',
	],
	[
		'label'    => __( 'Single Post Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28.672 1.984c1.728 0 3.2 1.216 3.328 2.784v22.24c0 1.6-1.376 2.88-3.104 2.976l-0.224 0.032h-25.344c-1.728 0-3.2-1.216-3.328-2.784v-22.24c0-1.6 1.376-2.88 3.104-2.976l0.224-0.032h25.344zM28.672 3.328h-25.344c-1.056 0-1.888 0.672-1.984 1.504v22.176c0 0.832 0.768 1.568 1.792 1.632l0.192 0.032h25.344c1.056 0 1.888-0.672 1.984-1.504v-22.176c0-0.832-0.768-1.568-1.792-1.632l-0.192-0.032zM26.656 23.328c0.384 0 0.672 0.288 0.672 0.672 0 0.32-0.224 0.608-0.544 0.64l-0.128 0.032h-21.312c-0.384 0-0.672-0.288-0.672-0.672 0-0.32 0.224-0.608 0.544-0.64l0.128-0.032h21.312zM26.656 19.328c0.384 0 0.672 0.288 0.672 0.672 0 0.32-0.224 0.608-0.544 0.64l-0.128 0.032h-21.312c-0.384 0-0.672-0.288-0.672-0.672 0-0.32 0.224-0.608 0.544-0.64l0.128-0.032h21.312zM9.248 7.648l0.032 0.128 3.36 9.344c0.096 0.32-0.064 0.704-0.416 0.832-0.288 0.128-0.64-0.032-0.8-0.288l-0.064-0.096-0.8-2.24h-3.808l-0.8 2.24c-0.096 0.288-0.416 0.48-0.736 0.416h-0.096c-0.32-0.128-0.48-0.448-0.448-0.736l0.032-0.128 3.328-9.344c0.224-0.544 0.928-0.576 1.216-0.128zM26.656 15.328c0.384 0 0.672 0.288 0.672 0.672 0 0.32-0.224 0.608-0.544 0.64l-0.128 0.032h-10.656c-0.384 0-0.672-0.288-0.672-0.672 0-0.32 0.256-0.608 0.544-0.64l0.128-0.032h10.656zM8.672 9.984l-1.44 4h2.848l-1.408-4zM26.656 11.328c0.384 0 0.672 0.288 0.672 0.672 0 0.32-0.224 0.608-0.544 0.64l-0.128 0.032h-10.656c-0.384 0-0.672-0.288-0.672-0.672 0-0.32 0.256-0.608 0.544-0.64l0.128-0.032h10.656zM26.656 7.328c0.384 0 0.672 0.288 0.672 0.672 0 0.32-0.224 0.608-0.544 0.64l-0.128 0.032h-10.656c-0.384 0-0.672-0.288-0.672-0.672 0-0.32 0.256-0.608 0.544-0.64l0.128-0.032h10.656z"></path></svg>',
		'location' => 'yuki_single_post',
	],
	[
		'label'    => __( 'Page Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28.672 1.984c1.728 0 3.2 1.216 3.328 2.784v22.24c0 1.6-1.376 2.88-3.104 2.976l-0.224 0.032h-25.344c-1.728 0-3.2-1.216-3.328-2.784v-22.24c0-1.6 1.376-2.88 3.104-2.976l0.224-0.032h25.344zM28.672 3.328h-25.344c-1.056 0-1.888 0.672-1.984 1.504v22.176c0 0.832 0.768 1.568 1.792 1.632l0.192 0.032h25.344c1.056 0 1.888-0.672 1.984-1.504v-22.176c0-0.832-0.768-1.568-1.792-1.632l-0.192-0.032zM15.552 20.672c0.256 0 0.448 0.192 0.448 0.448v5.76c0 0.256-0.192 0.448-0.448 0.448h-12.448c-0.224 0-0.448-0.192-0.448-0.448v-5.76c0-0.256 0.224-0.448 0.448-0.448h12.448zM28.672 25.984c0.384 0 0.672 0.32 0.672 0.672s-0.256 0.608-0.544 0.672h-10.784c-0.384 0-0.672-0.288-0.672-0.672 0-0.32 0.224-0.576 0.544-0.64l0.128-0.032h10.656zM14.656 21.984h-10.656v4h10.656v-4zM28.672 23.328c0.384 0 0.672 0.288 0.672 0.672 0 0.32-0.256 0.608-0.544 0.64l-0.128 0.032h-10.656c-0.384 0-0.672-0.288-0.672-0.672 0-0.32 0.224-0.608 0.544-0.64l0.128-0.032h10.656zM28.672 20.672c0.384 0 0.672 0.288 0.672 0.672 0 0.32-0.256 0.576-0.544 0.64h-10.784c-0.384 0-0.672-0.288-0.672-0.64s0.224-0.608 0.544-0.672h10.784zM28.896 4.672c0.224 0 0.448 0.192 0.448 0.448v13.76c0 0.256-0.224 0.448-0.448 0.448h-25.792c-0.224 0-0.448-0.192-0.448-0.448v-13.76c0-0.256 0.224-0.448 0.448-0.448h25.792zM20.64 10.304l-5.28 5.44c-0.192 0.16-0.448 0.256-0.704 0.16l-0.096-0.064-3.936-2.304-4.896 4.448h21.472l-6.56-7.68zM28 5.984h-24v11.776l6.080-5.536c0.192-0.16 0.448-0.224 0.672-0.128l0.128 0.064 3.904 2.272 5.44-5.568c0.224-0.256 0.608-0.256 0.896-0.064l0.096 0.096 6.784 7.968v-10.88zM8 7.328c1.12 0 2.016 0.896 2.016 2.016s-0.896 1.984-2.016 1.984-1.984-0.896-1.984-1.984 0.864-2.016 1.984-2.016zM8 8.672c-0.384 0-0.672 0.288-0.672 0.672s0.288 0.64 0.672 0.64 0.672-0.288 0.672-0.64-0.288-0.672-0.672-0.672z"></path></svg>',
		'location' => 'yuki_pages',
	],
	[
		'label'    => __( 'Archive Settings', 'yuki' ),
		'icon'     => yuki_image( 'posts-grid' ),
		'location' => 'yuki_archive',
	],
	[
		'label'    => __( 'Sidebar Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M31.328 0h-30.656c-0.384 0-0.672 0.288-0.672 0.672v30.656c0 0.384 0.288 0.672 0.672 0.672h30.656c0.384 0 0.672-0.288 0.672-0.672v-30.656c0-0.384-0.288-0.672-0.672-0.672zM30.656 1.344v5.312h-29.312v-5.312h29.312zM1.344 8h17.312v22.656h-17.312v-22.656zM20 30.656v-22.656h10.656v22.656h-10.656zM27.328 26.656h-4c-0.352 0-0.672 0.32-0.672 0.672s0.32 0.672 0.672 0.672h4c0.384 0 0.672-0.288 0.672-0.672s-0.288-0.672-0.672-0.672zM27.328 22.656h-4c-0.352 0-0.672 0.32-0.672 0.672s0.32 0.672 0.672 0.672h4c0.384 0 0.672-0.288 0.672-0.672s-0.288-0.672-0.672-0.672zM27.328 18.656h-4c-0.352 0-0.672 0.32-0.672 0.672s0.32 0.672 0.672 0.672h4c0.384 0 0.672-0.288 0.672-0.672s-0.288-0.672-0.672-0.672zM27.328 14.656h-4c-0.352 0-0.672 0.32-0.672 0.672s0.32 0.672 0.672 0.672h4c0.384 0 0.672-0.288 0.672-0.672s-0.288-0.672-0.672-0.672zM27.328 10.656h-4c-0.352 0-0.672 0.32-0.672 0.672s0.32 0.672 0.672 0.672h4c0.384 0 0.672-0.288 0.672-0.672s-0.288-0.672-0.672-0.672z"></path></svg>',
		'location' => 'yuki_global:yuki_global_sidebar_section',
	],
	[
		'label'    => __( 'Social Networks', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M26.656 21.344c-1.824 0-3.456 0.928-4.416 2.368l-11.904-5.952c0.192-0.544 0.32-1.152 0.32-1.76s-0.128-1.216-0.32-1.76l11.904-5.952c0.96 1.44 2.592 2.368 4.416 2.368 2.944 0 5.344-2.368 5.344-5.312s-2.4-5.344-5.344-5.344-5.312 2.4-5.312 5.344c0 0.608 0.128 1.184 0.32 1.76l-11.904 5.92c-0.96-1.408-2.592-2.368-4.416-2.368-2.944 0-5.344 2.4-5.344 5.344s2.4 5.344 5.344 5.344c1.824 0 3.456-0.96 4.416-2.4l11.904 5.952c-0.192 0.576-0.32 1.152-0.32 1.76 0 2.944 2.368 5.344 5.312 5.344s5.344-2.4 5.344-5.344-2.4-5.312-5.344-5.312zM26.656 1.344c2.208 0 4 1.792 4 4s-1.792 4-4 4c-1.536 0-2.88-0.928-3.552-2.208 0-0.032 0-0.032 0-0.032s0 0 0 0c-0.256-0.544-0.448-1.12-0.448-1.76 0-2.208 1.792-4 4-4zM5.344 20c-2.208 0-4-1.792-4-4s1.792-4 4-4c1.536 0 2.88 0.896 3.552 2.208 0 0 0 0 0 0s0 0 0 0c0.288 0.544 0.448 1.152 0.448 1.792s-0.16 1.216-0.448 1.76c0 0 0 0 0 0.032 0 0 0 0 0 0-0.672 1.312-2.016 2.208-3.552 2.208zM26.656 30.656c-2.208 0-4-1.792-4-4 0-0.64 0.192-1.216 0.448-1.76 0 0 0 0 0 0s0 0 0-0.032c0.672-1.28 2.016-2.208 3.552-2.208 2.208 0 4 1.792 4 4s-1.792 4-4 4z"></path></svg>',
		'location' => 'yuki_global:yuki_global_socials',
	],
	[
		'label'    => __( 'To Top Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M15.36 6.688c0.352-0.352 0.928-0.352 1.28 0l4.416 4.416c0.576 0.544 0.16 1.472-0.608 1.472h-2.72v16.288c-0.096 0.992-0.832 1.792-1.728 1.792h-0.16c-0.896-0.096-1.568-0.96-1.568-1.984v-16.096h-2.72c-0.768 0-1.184-0.928-0.608-1.472l4.416-4.416zM29.344 0.928c0.96 0 1.728 0.768 1.728 1.728s-0.768 1.728-1.728 1.728h-26.688c-0.96 0-1.728-0.768-1.728-1.728s0.768-1.728 1.728-1.728h26.688z"></path></svg>',
		'location' => 'yuki_global:yuki_global_scroll_to_top',
	],
	[
		'label'    => __( 'Copyright Settings', 'yuki' ),
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 20.016q3.281 0 5.648-2.367t2.367-5.648-2.367-5.648-5.648-2.367-5.648 2.367-2.367 5.648 2.367 5.648 5.648 2.367zM12 2.016q4.125 0 7.055 2.93t2.93 7.055-2.93 7.055-7.055 2.93-7.055-2.93-2.93-7.055 2.93-7.055 7.055-2.93zM11.859 9.141q-1.875 0-1.875 2.719v0.281q0 2.719 1.875 2.719 0.703 0 1.172-0.398t0.469-1.008h1.781q0 1.172-1.031 2.063-0.984 0.844-2.391 0.844-1.875 0-2.859-1.125t-0.984-3.094v-0.281q0-1.922 0.938-3 1.125-1.266 2.906-1.266 1.547 0 2.438 0.891 0.984 0.984 0.984 2.297h-1.781q0-0.328-0.141-0.609-0.234-0.469-0.328-0.563-0.469-0.469-1.172-0.469z"></path></svg>',
		'location' => 'yuki_footer:copyright',
	],
];

$widgets = [
	[
		'title'   => __( 'Support', 'yuki' ),
		'content' => __( "If you have any question about using this theme, feel free to submit us a support ticket here.", 'yuki' ),
		'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M416 176C416 78.8 322.9 0 208 0S0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176zM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160c-.3145 0-.6191 .041-.9336 .043C447.5 165.3 448 170.6 448 176c0 98.62-79.68 181.2-186.1 202.5C282.7 455.1 357.1 512 448 512c33.69 0 65.32-8.008 92.85-21.98C565.2 502 596.1 512 632.3 512c3.059 0 5.76-1.725 7.02-4.605c1.229-2.879 .6582-6.148-1.441-8.354C637.6 498.7 615.9 475.3 599.6 443.7z"/></svg>',
		'url'     => admin_url( 'themes.php?page=yuki-contact' ),
		'label'   => __( 'Submit a Ticket', 'yuki' ),
	],
	[
		'title'   => __( 'Affiliation', 'yuki' ),
		'content' => __( "Like this theme? Become our ambassador and earn cash ;-)", 'yuki' ),
		'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M160 0C177.7 0 192 14.33 192 32V67.68C193.6 67.89 195.1 68.12 196.7 68.35C207.3 69.93 238.9 75.02 251.9 78.31C268.1 82.65 279.4 100.1 275 117.2C270.7 134.3 253.3 144.7 236.1 140.4C226.8 137.1 198.5 133.3 187.3 131.7C155.2 126.9 127.7 129.3 108.8 136.5C90.52 143.5 82.93 153.4 80.92 164.5C78.98 175.2 80.45 181.3 82.21 185.1C84.1 189.1 87.79 193.6 95.14 198.5C111.4 209.2 136.2 216.4 168.4 225.1L171.2 225.9C199.6 233.6 234.4 243.1 260.2 260.2C274.3 269.6 287.6 282.3 295.8 299.9C304.1 317.7 305.9 337.7 302.1 358.1C295.1 397 268.1 422.4 236.4 435.6C222.8 441.2 207.8 444.8 192 446.6V480C192 497.7 177.7 512 160 512C142.3 512 128 497.7 128 480V445.1C127.6 445.1 127.1 444.1 126.7 444.9L126.5 444.9C102.2 441.1 62.07 430.6 35 418.6C18.85 411.4 11.58 392.5 18.76 376.3C25.94 360.2 44.85 352.9 60.1 360.1C81.9 369.4 116.3 378.5 136.2 381.6C168.2 386.4 194.5 383.6 212.3 376.4C229.2 369.5 236.9 359.5 239.1 347.5C241 336.8 239.6 330.7 237.8 326.9C235.9 322.9 232.2 318.4 224.9 313.5C208.6 302.8 183.8 295.6 151.6 286.9L148.8 286.1C120.4 278.4 85.58 268.9 59.76 251.8C45.65 242.4 32.43 229.7 24.22 212.1C15.89 194.3 14.08 174.3 17.95 153C25.03 114.1 53.05 89.29 85.96 76.73C98.98 71.76 113.1 68.49 128 66.73V32C128 14.33 142.3 0 160 0V0z"/></svg>',
		'url'     => admin_url( 'themes.php?page=yuki-affiliation' ),
		'label'   => __( 'Learn More', 'yuki' ),
	]
];

if ( yuki_fs()->is_not_paying() ) {
	array_unshift( $widgets, [
		'title'   => __( 'Upgrade to Pro', 'yuki' ),
		'content' => __( 'Upgrade to Professional Edition to support our development and get more features and functionality to help you create powerful and feature-rich websites.', 'yuki' ),
		'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"/></svg>',
		'url'     => admin_url( 'themes.php?page=yuki-pricing' ),
		'label'   => __( 'Upgrade', 'yuki' ),
	] );
}

$links = [
	[
		'title' => __( 'Yuki Theme Homepage', 'yuki' ),
		'url'   => 'https://www.wpmoose.com/themes/yuki-theme',
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M511.8 287.6L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L416 100.7V64C416 46.33 430.3 32 448 32H480C497.7 32 512 46.33 512 64V185L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6L511.8 287.6z"/></svg>',
	],
	[
		'title' => __( 'Yuki Documentation', 'yuki' ),
		'url'   => 'https://www.wpmoose.com/docs/yuki-theme-docs/',
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>',
	],
	[
		'title' => __( 'Yuki Support Forum', 'yuki' ),
		'url'   => 'https://wordpress.org/support/theme/yuki/',
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M184 88C184 118.9 158.9 144 128 144C97.07 144 72 118.9 72 88C72 57.07 97.07 32 128 32C158.9 32 184 57.07 184 88zM208.4 196.3C178.7 222.7 160 261.2 160 304C160 338.3 171.1 369.8 192 394.5V416C192 433.7 177.7 448 160 448H96C78.33 448 64 433.7 64 416V389.2C26.16 371.2 0 332.7 0 288C0 226.1 50.14 176 112 176H144C167.1 176 190.2 183.5 208.4 196.3V196.3zM64 245.7C54.04 256.9 48 271.8 48 288C48 304.2 54.04 319.1 64 330.3V245.7zM448 416V394.5C468 369.8 480 338.3 480 304C480 261.2 461.3 222.7 431.6 196.3C449.8 183.5 472 176 496 176H528C589.9 176 640 226.1 640 288C640 332.7 613.8 371.2 576 389.2V416C576 433.7 561.7 448 544 448H480C462.3 448 448 433.7 448 416zM576 330.3C585.1 319.1 592 304.2 592 288C592 271.8 585.1 256.9 576 245.7V330.3zM568 88C568 118.9 542.9 144 512 144C481.1 144 456 118.9 456 88C456 57.07 481.1 32 512 32C542.9 32 568 57.07 568 88zM256 96C256 60.65 284.7 32 320 32C355.3 32 384 60.65 384 96C384 131.3 355.3 160 320 160C284.7 160 256 131.3 256 96zM448 304C448 348.7 421.8 387.2 384 405.2V448C384 465.7 369.7 480 352 480H288C270.3 480 256 465.7 256 448V405.2C218.2 387.2 192 348.7 192 304C192 242.1 242.1 192 304 192H336C397.9 192 448 242.1 448 304zM256 346.3V261.7C246 272.9 240 287.8 240 304C240 320.2 246 335.1 256 346.3zM384 261.7V346.3C393.1 335 400 320.2 400 304C400 287.8 393.1 272.9 384 261.7z"/></svg>',
	],
	[
		'title' => __( 'Rate Us 5 Stars', 'yuki' ),
		'url'   => 'https://wordpress.org/support/theme/yuki/reviews/?rate=5#new-post',
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>',
	],
];

?>

<div class="wrap yuki-admin-page">
    <div class="page-header">
        <div class="container page-header-content">
            <h1><?php esc_html_e( 'Yuki Theme', 'yuki' ); ?></h1>
            <p>
				<?php esc_html_e( 'Yuki is a modern and highly customizable multipurpose WordPress theme.', 'yuki' ); ?>
            </p>
        </div>
    </div>

    <div class="container page-body">
        <div class="page-content">
            <div class="customizer-items">
				<?php foreach ( $customizer_items as $item ): ?>
                    <div class="customizer-item-wrap">
                        <a class="customizer-item"
                           target="_blank"
                           href="<?php echo esc_url( Utils::customizer_url( $item['location'] ) ) ?>">
                            <div class="customizer-item-icon">
								<?php echo yuki_kses( $item['icon'] ); ?>
                            </div>
                            <span class="item-label"><?php echo esc_html( $item['label'] ); ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M502.6 278.6l-128 128c-12.51 12.51-32.76 12.49-45.25 0c-12.5-12.5-12.5-32.75 0-45.25L402.8 288H32C14.31 288 0 273.7 0 255.1S14.31 224 32 224h370.8l-73.38-73.38c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l128 128C515.1 245.9 515.1 266.1 502.6 278.6z"/>
                            </svg>
                        </a>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
        <div class="page-sidebar">
            <div class="page-widgets">
                <div class="page-widget">
                    <h3 class="widget-title">
						<?php esc_html_e( 'Helpful Links', 'yuki' ); ?>
                    </h3>
                    <div class="widget-content">
                        <ul class="links">
							<?php foreach ( $links as $link ): ?>
                                <li class="link-item">
									<?php echo yuki_kses( $link['icon'] ) ?>
                                    <a href="<?php echo esc_url( $link['url'] ) ?>" target="_blank">
										<?php echo esc_html( $link['title'] ); ?>
                                    </a>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
				<?php foreach ( $widgets as $widget ): ?>
                    <div class="page-widget">
                        <h3 class="widget-title">
							<?php echo esc_html( $widget['title'] ); ?>
                        </h3>
                        <p class="widget-content">
							<?php echo esc_html( $widget['content'] ); ?>
                        </p>
                        <a class="widget-link yuki-button" href="<?php echo esc_url( $widget['url'] ) ?>">
							<?php echo yuki_kses( $widget['icon'] ); ?>
                            <span><?php echo esc_html( $widget['label'] ); ?></span>
                        </a>
                    </div>
				<?php endforeach; ?>
            </div>

            <div class="recommend-plugins">
                <h2><?php esc_html_e( 'Recommend Plugins', 'yuki' ); ?></h2>
				<?php foreach ( yuki_recommend_plugins() as $slug => $plugin ): ?>
                    <div class="recommend-plugin">
                        <div class="plugin-content">
                            <h4 class="plugin-title">
                                <a href="<?php echo esc_url( $plugin['home'] ) ?>"
                                   target="_blank">
									<?php echo esc_html( $plugin['title'] ); ?>
                                </a>
                            </h4>
                            <p>
								<?php echo esc_html( $plugin['desc'] ) ?>
                            </p>

                            <div class="plugin-actions">
                                <a class="yuki-button" href="<?php echo esc_url(
									add_query_arg( array(
										'action'   => 'yuki_install_recommend_plugin',
										'slug'     => $slug,
										'_wpnonce' => wp_create_nonce( 'yuki_install_recommend_plugin' )
									), admin_url( 'admin.php' ) )
								) ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                                    </svg>

                                    <span><?php esc_html_e( 'Install Plugin', 'yuki' ); ?></span>
                                </a>
                                <a class="yuki-button is-style-outline"
                                   target="_blank"
                                   href="<?php echo esc_url( 'https://wordpress.org/plugins/' . $slug ) ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M96 0C78.3 0 64 14.3 64 32l0 96 64 0 0-96c0-17.7-14.3-32-32-32zM288 0c-17.7 0-32 14.3-32 32l0 96 64 0 0-96c0-17.7-14.3-32-32-32zM32 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l0 32c0 77.4 55 142 128 156.8l0 67.2c0 17.7 14.3 32 32 32s32-14.3 32-32l0-67.2C297 398 352 333.4 352 256l0-32c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 160z"/>
                                    </svg>

                                    <span><?php esc_html_e( 'Plugin Page', 'yuki' ); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="page-footer"></div>
</div>
