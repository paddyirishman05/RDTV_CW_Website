<?php 

/**
 * Wise Chat admin localization settings tab class.
 *
 * @author Kainex <contact@kainex.pl>
 */
class WiseChatLocalizationTab extends WiseChatAbstractTab {

	public function getFields() {
		return array(
			array('_section', 'Localization Settings'),
			array('custom_i18n', 'Enable Custom Localization', 'booleanFieldCallback', 'boolean', 'Enable the option to use the translations defined below. By default Wise Chat plugin uses WordPress translations.'),
			array('_section', 'Translations'),
			array(
				'hint_message', 'Hint Message', 'stringFieldCallback', 'string',
				'A hint message displayed in the message input field'
			),
			array(
				'user_name_prefix', 'User Name Prefix', 'stringFieldCallback', 'string',
				'Anonymous user\'s name prefix'
			),
			array(
				'message_submit_button_caption', 'Submit Button Caption', 'stringFieldCallback', 'string',
				'Caption for message submit button'
			),
			array('window_title', 'Window Title', 'stringFieldCallback', 'string', 'Title of the messages window'),
			array('users_list_search_hint', 'Users List Search Hint', 'stringFieldCallback', 'string'),
			array('message_loading_chat', 'Loading the chat ...', 'stringFieldCallback', 'string'),
			array('message_loading', 'Loading ...', 'stringFieldCallback', 'string'),
			array('message_save', '"Save" message', 'stringFieldCallback', 'string'),
			array('message_reset', '"Reset" message', 'stringFieldCallback', 'string'),
			array('message_name', '"Name" message', 'stringFieldCallback', 'string'),
			array('message_customize', '"Customize" message', 'stringFieldCallback', 'string'),
			array('message_sending', '"Sending" message', 'stringFieldCallback', 'string'),
			array('message_mute_sounds', '"Mute sounds" message', 'stringFieldCallback', 'string'),
			array('message_text_color', '"Text color" message', 'stringFieldCallback', 'string'),
			array('message_online_users', '"Online users" message', 'stringFieldCallback', 'string'),
			array('message_sec_ago', '"sec. ago" message', 'stringFieldCallback', 'string'),
			array('message_min_ago', '"min. ago" message', 'stringFieldCallback', 'string'),
			array('message_yesterday', '"yesterday" message', 'stringFieldCallback', 'string'),
            array('message_insert_emoticon', '"Insert an emoticon" message', 'stringFieldCallback', 'string'),
            array('message_insert_into_message', '"Insert into message" message', 'stringFieldCallback', 'string'),
			array('message_picture_upload_hint', '"Upload a picture" message', 'stringFieldCallback', 'string'),
			array('message_attach_file_hint', '"Attach a file" message', 'stringFieldCallback', 'string'),
			array('message_channel_password_authorization_hint', 'Channel Authorization Hint', 'stringFieldCallback', 'string'),
			array('message_login', '"Log in" message', 'stringFieldCallback', 'string'),
			array('message_enter_user_name', '"Enter your username" message', 'stringFieldCallback', 'string'),
			array('message_enter_password', '"Enter password"', 'stringFieldCallback', 'string'),
			array('message_input_title', 'Message input hint', 'stringFieldCallback', 'string'),
			array('message_delete_message', '"Delete the message" message', 'stringFieldCallback', 'string'),
			array('message_ban_this_user', '"Ban this user" message', 'stringFieldCallback', 'string'),
			array('message_mute_this_user', '"Mute this user" message', 'stringFieldCallback', 'string'),
			array('message_report_spam', '"Report spam" message', 'stringFieldCallback', 'string'),

			array('message_yes', '"Yes" message', 'stringFieldCallback', 'string'),
			array('message_no', '"No" message', 'stringFieldCallback', 'string'),
			array('message_ok', '"OK" message', 'stringFieldCallback', 'string'),
			array('message_confirmation', '"Confirmation" message', 'stringFieldCallback', 'string'),
			array('message_information', '"Information" message', 'stringFieldCallback', 'string'),
			array('message_close', '"Close" message', 'stringFieldCallback', 'string'),
			array('message_error', '"Error" message', 'stringFieldCallback', 'string'),
			array('message_send_a_message', '"Send a message" message', 'stringFieldCallback', 'string'),
			array('message_users', '"Users" message', 'stringFieldCallback', 'string'),
			array('message_channels', '"Channels" message', 'stringFieldCallback', 'string'),
			array('message_channel', '"Channel" message', 'stringFieldCallback', 'string'),
			array('message_chats', '"Chats" message', 'stringFieldCallback', 'string'),
			array('message_no_channels', '"No channels open."', 'stringFieldCallback', 'string'),
			array('message_no_chats', '"No chats open."', 'stringFieldCallback', 'string'),
			array('message_users_and_channels', '"Users and Channels"', 'stringFieldCallback', 'string'),

			array('message_delete_confirmation', 'Confirmation message #1', 'stringFieldCallback', 'string', '"Are you sure you want to delete this message?"'),
			array('message_ban_confirmation', 'Confirmation message #2', 'stringFieldCallback', 'string', '"Are you sure you want to ban this user?"'),
			array('message_mute_confirmation', 'Confirmation message #3', 'stringFieldCallback', 'string', '"Are you sure you want to mute this user?"'),

			array('message_user_banned', 'Information message #4', 'stringFieldCallback', 'string', '"The user has been banned."'),
			array('message_user_muted', 'Information message #5', 'stringFieldCallback', 'string', '"The user has been muted."'),
			array('message_spam_reported', 'Information message #6', 'stringFieldCallback', 'string', '"Thank you for reporting this."'),

			array('message_error_1', 'Message error #1', 'stringFieldCallback', 'string', 'Message: "Only letters, number, spaces, hyphens and underscores are allowed"'),
			array('message_error_2', 'Message error #2', 'stringFieldCallback', 'string', 'Message: "This name is already occupied"'),
			array('message_error_3', 'Message error #3', 'stringFieldCallback', 'string', 'Message: "You were banned from posting messages"'),
			array('message_error_4', 'Message error #4 (HTML)', 'stringFieldCallback', 'rawString', 'Message: "Only logged in users are allowed to enter the chat"'),
			array('message_error_5', 'Message error #5 (HTML)', 'stringFieldCallback', 'rawString', 'Message: "The chat is closed now"'),
			array('message_error_6', 'Message error #6 (HTML)', 'stringFieldCallback', 'rawString', 'Message: "The chat is full now. Try again later."'),
			array('message_error_7', 'Message error #7', 'stringFieldCallback', 'string', 'Message: "Unsupported type of file."'),
			array('message_error_8', 'Message error #8', 'stringFieldCallback', 'string', 'Message: "The size of the file exceeds allowed limit."'),
			array('message_error_9', 'Message error #9', 'stringFieldCallback', 'string', 'Message: "Invalid password."'),
			array('message_error_10', 'Message error #10 (HTML)', 'stringFieldCallback', 'rawString', 'Message: "You cannot enter the chat due to the limit of channels you can participate simultaneously."'),
			array('message_error_11', 'Message error #11 (HTML)', 'stringFieldCallback', 'string', 'Message: "You are not allowed to enter the chat."'),
			array('message_error_12', 'Message error #12 (HTML)', 'stringFieldCallback', 'string', 'Message: "You are blocked from using the chat."'),
			array('message_error_13', 'Message error #13', 'stringFieldCallback', 'string', 'Message: "The length of the message exceeds allowed limit."'),
			array('message_error_15', 'Message error #15', 'stringFieldCallback', 'string', '"You are not allowed to send messages. You have been muted."'),

			array('message_text_1', 'Message text #1', 'stringFieldCallback', 'string', 'Message: "Are you sure you want to report the message as spam?"'),
			array('message_saved_settings', 'Message text #2', 'stringFieldCallback', 'string', '"Settings have been saved."'),
		);
	}
	
	public function getDefaultValues() {
		return array(
			'custom_i18n' => 0,
			'hint_message' => 'Enter message here',
			'user_name_prefix' => 'Anonymous',
			'message_submit_button_caption' => 'Send',
			'message_save' => 'Save',
			'message_reset' => 'Reset',
			'message_name' => 'Name',
			'message_customize' => 'Customize',
			'message_sending' => 'Sending ...',
			'message_error_1' => 'Only letters, number, spaces, hyphens and underscores are allowed',
			'message_error_2' => 'This name is already occupied',
			'message_error_3' => 'You were banned from posting messages',
			'message_error_4' => 'Only logged in users are allowed to enter the chat',
			'message_error_5' => 'The chat is closed now',
			'message_error_6' => 'The chat is full now. Try again later.',
			'message_error_7' => 'Unsupported type of file.',
			'message_error_8' => 'The size of the file exceeds allowed limit.',
			'message_error_9' => 'Invalid password.',
			'message_error_10' => 'You cannot enter the chat due to the limit of channels you can participate simultaneously.',
			'message_error_11' => 'You are not allowed to enter the chat.',
			'message_error_12' => 'You are blocked from using the chat.',
			'message_error_13' => 'The length of the message exceeds allowed limit.',
			'message_error_14' => 'You are not allowed to send private messages to this user.',
			'message_error_15' => 'You are not allowed to send messages. You have been muted.',
			'message_error_16' => 'Could not initialize the microphone. Please set your web browser to allow for sound recording.',

			'message_text_1' => 'Are you sure you want to report the message as spam?',
			'message_saved_settings' => 'Settings have been saved.',
			'window_title' => 'Chat',
			'message_loading_chat' => 'Loading the chat ...',
			'message_loading' => 'Loading ...',
			'message_users_and_channels' => 'Users and Channels',
			'users_list_search_hint' => 'Search ...',
			'message_enable_notifications' => 'Enable E-mail Notifications',
			'message_mute_sounds' => 'Mute sounds',
			'message_text_color' => 'Text color',
			'message_online_users' => 'Online users',
			'message_sec_ago' => 'sec. ago',
			'message_min_ago' => 'min. ago',
			'message_yesterday' => 'yesterday',
            'message_insert_emoticon' => 'Insert an emoticon',
            'message_insert_into_message' => 'Insert into message',
			'message_picture_upload_hint' => 'Upload a picture',
			'message_attach_file_hint' => 'Attach a file',
			'message_channel_password_authorization_hint' => 'This channel is protected. Enter your password:',
			'message_login' => 'Log in',
			'message_login_using' => 'Log in using',
			'message_login_anonymously' => 'Log in anonymously',
			'message_approve_message' => 'Approve the message',
			'message_delete_message' => 'Delete the message',
			'message_edit_message' => 'Edit the message',
			'message_reply_to_message' => 'Reply to',
			'message_replying_to_message' => 'Replying to',
			'message_ban_this_user' => 'Ban this user',
			'message_mute_this_user' => 'Mute this user',
			'message_report_spam' => 'Report spam',
			'message_enter_user_name' => 'Enter your username',
			'message_enter_password' => 'Enter password',
			'message_input_title' => 'Use Shift+ENTER in order to move to the next line',
			'message_users_list_empty' => 'No users in the channel',
			'message_yes' => 'Yes',
			'message_no' => 'No',
			'message_ok' => 'OK',
			'message_error' => 'Error',
			'message_ignore_user' => 'Ignore this user',
			'message_information' => 'Information',
			'message_confirmation' => 'Confirmation',
			'message_maximize' => 'Maximize',
			'message_minimize' => 'Minimize',
			'message_close' => 'Close',
			'message_send_a_message' => 'Send a message',
			'message_facebook_user' => 'Facebook user',
			'message_twitter_user' => 'Twitter user',
			'message_google_user' => 'Google user',
			'message_anonymous_user' => 'Anonymous user',
			'message_users' => 'Users',
			'message_channels' => 'Channels',
			'message_channel' => 'Channel',
			'message_recent' => 'Recent',
			'message_chats' => 'Chats',
			'message_no_channels' => 'No channels open.',
			'message_no_chats' => 'No chats open.',
			'message_no_recent_chats' => 'No recent chats',
			'message_user_not_found_in_chat' => 'The user is not in the chat',
			'message_unread_messages' => 'Unread Messages',
			'message_messages_archive' => 'Messages Archive',
			'message_attaching_voice_message' => 'Attaching voice message',

			'message_delete_confirmation' => 'Are you sure you want to delete this message?',
			'message_ban_confirmation' => 'Are you sure you want to ban this user?',
			'message_mute_confirmation' => 'Are you sure you want to mute this user?',
			'message_approve_confirmation' => 'Are you sure you want to approve this message?',

			'message_info_1' => 'This user is ignored by you. Would you like to stop ignoring this user?',
			'message_info_2' => 'invites you to the private chat. Do you accept it?',
			'message_info_3' => 'The message has been posted, but first it must be approved by the administrator.',
			'message_user_banned' => 'The user has been banned.',
			'message_user_muted' => 'The user has been muted.',
			'message_spam_reported' => 'Thank you for reporting this.',

			'message_bp_manage_tab_name' => 'Chat',
			'message_bp_manage_enable_chat' => 'Enable Chat',
			'message_bp_manage_tab_position' => 'Tab Position',
			'message_bp_manage_tab_label' => 'Tab Label',
			'message_bp_manage_permissions' => 'Tab Permissions',
			'message_bp_manage_permissions_mods_delete' => 'Allow mods to delete messages',
			'message_bp_manage_permissions_mods_ban' => 'Allow mods to ban users',
			'message_bp_manage_permissions_mods_edit' => 'Allow mods to edit messages',
			'message_bp_manage_permissions_admins_delete' => 'Allow admins to delete messages',
			'message_bp_manage_permissions_admins_ban' => 'Allow admins to ban users',
			'message_bp_manage_permissions_admins_edit' => 'Allow admins to edit messages',
			'message_bp_manage_notice' => 'Notice:',
			'message_bp_manage_notice_text' => 'These permissions will work only with enabled admin actions in Wise Chat Pro settings',
			'message_bp_manage_shortcode' => 'Wise Chat Pro detailed parameters (shortcode syntax required)',
			'message_bp_manage_shortcode_example' => 'Example:',
			'message_bp_chat_message' => 'Chat Message',

			'message_reaction_like' => 'Like',
			'message_reaction_i_like_it' => 'I like it',
			'message_reaction_love' => 'Love',
			'message_reaction_sad' => 'Sad',
		);
	}
}