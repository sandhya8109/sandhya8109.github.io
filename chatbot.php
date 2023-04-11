<!DOCTYPE html>
<html>
<head>

	<title> Chatbot </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/chatbot.css">
    <script src="../js/chatbot.js"></script>
</head>
<!-- Chatbot -->
<div class="botIcon">
	<div class="botIconContainer">
		<div class="iconInner" id="iconInner">
			<i class="fa fa-commenting" aria-hidden="true"></i>
		</div>
	</div>
	<div class="Layout Layout-open Layout-expand Layout-right">
		<div class="Messenger_messenger">
			<div class="Messenger_header">
				<h4 class="Messenger_prompt">How can we help you?</h4> <span class="chat_close_icon"><i class="fa fa-window-close" aria-hidden="true"></i></span>
			</div>
			<div class="Messenger_content">
				<div class="Messages">
					<div class="Messages_list"></div>
				</div>
				<form id="messenger">
					<div class="Input Input-blank">
<!-- 							<textarea name="msg" class="Input_field" placeholder="Send a message..."></textarea> -->
						<input name="msg" class="Input_field" placeholder="Send a message...">
						<button type="submit" class="Input_button Input_button-send">
							<div class="Icon">
								<svg viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
										<path d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C5.08414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z" id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
									</g>
								</svg>
							</div>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Chatbot -->
</html>