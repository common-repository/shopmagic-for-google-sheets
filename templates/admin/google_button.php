<?php
/**
 * @var string $authorization_url
 */

?>

<style>
	@font-face {
		font-family: "Google Sans";
		src: url("https://fonts.gstatic.com/s/googlesans/v45/4UasrENHsxJlGDuGo1OIlJfC6l_24rlCK1Yo_Iqcsih3SAyH6cAwhX9RPjIUvQ.woff2") format("woff2");
		font-style: normal;
		font-weight: 500;
		font-display: swap;
		unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
	}

	#customBtn {
		background-color: #fff;
		border-radius: 4px;
		color: #3c4043;
		cursor: pointer;
		text-decoration: none;
		width: 238px;
		height: 44px;
		transition: background-color .218s, border-color .218s;
		box-sizing: border-box;
		border: 1px solid #dadce0;
		margin: 0 -14px;
		overflow: hidden;
		white-space: nowrap;
		letter-spacing: 0.25px;
		padding: 0 12px;
		text-align: center;
		font-size: 14px;
		font-family: "Google Sans", arial, sans-serif;
		font-weight: 400;
	}

	#customBtn .container {
		display: flex;
		align-items: center;
		flex-direction: row;
		justify-content: center;
		flex-wrap: nowrap;
		height: 100%;
		width: 100%;
	}

	#customBtn span.buttonText {
		flex-grow: 1;
		font-weight: 500;
		color: #3c4043;
	}

	#customBtn .icon {
		display: block;
	}

	#customBtn .icon__wrapper {
		height: 18px;
		width: 18px;
		min-width: 18px;
		margin-right: 8px;
	}

</style>
<div id="customBtn">
	<a class="container"
	   href="<?php echo esc_url( $authorization_url ); ?>"
	>
		<div class="icon__wrapper">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="icon">
				<g>
					<path
						fill="#EA4335"
						d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
					<path fill="#4285F4"
						  d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
					<path fill="#FBBC05"
						  d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
					<path fill="#34A853"
						  d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
					<path fill="none" d="M0 0h48v48H0z"></path>
				</g>
			</svg>
		</div>
		<span class="buttonText">
			<?php esc_html_e( 'Sign in with Google', 'shopmagic-for-google-sheets' ); ?>
		</span>
	</a>
</div>
