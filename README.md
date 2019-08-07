# php
Globe Labs PHP sample codes

==============================================================================

Sending SMS (sms-mt)

	Shortcode
	- Your shortcode suffix (last 4 digits)

	access_token
	- Contains security information for transacting with a subscriber. Subscriber needs to grant an app first via SMS or Web Form Subscriber Consent Workflow.

	address
	- Target number

	clientCorrelator
	- Uniquely identifies this create SMS request. If there is a communication failure during the request, using the same clientCorrelator when retrying the request allows the operator to avoid sending the same SMS twice.

	message
	- Must be provided within the outboundSMSTextMessage element. Currently, the API implementation is limited a maximum of 160 characters. Also make sure that your language or framework’s editor is encoding the HTTP parameters as UTF-8

==============================================================================	

Location Based Services (lbs)

	access_token
	- Contains security information for transacting with a subscriber. Subscriber needs to grant an app first via SMS or Web Form Subscriber Consent Workflow.

	address
	- Target number

	requestedAccuracy
	- The preferred accuracy of the result, in meters. Typically, when you request an accurate location it will take longer to retrieve than a coarse location. So requestedAccuracy=10 will take longer than requestedAccuracy=100 

==============================================================================

Charging

	app_id
	- Unique identifier of your app

	app_secret
	- The security code of your app

	access_token
	- Identifier retrieved upon completing the opt-in process 
	
	amount
	- Amount to be charged. Must be in decimal format. eg. 1.00, 2.50, 10.00

	code
	- Needed to retrive the access_token. Sent to your redirect_uri after the opt-in process

	description
	- Is the human-readable text to appear on the bill, so the user can easily see what they bought

	endUserId / subscriber_number
	- Target number

	referenceCode
	- Is a unique alphanumeric code for records matching. The operator should include it in reports so that you can match their view of what has been sold with yours by matching the referenceCodes. Required format: Suffix of your shortcode (last 4 digits) + Unique combination of 7 alphanumeric string, but we recommend that you do Increments of 1 from 1000000 for faster tracking. e.g. [1234]1000001 to [1234]9999999]

	transactionOperationStatus
	- A mandatory parameter that should always be set to Charged

	duration
	- This defines how many days the subscriber will be subscribed to the promo(duration=0 for one-time charging).

==============================================================================

Load API and Load Status

	app_id
	- Unique identifier of your app

	app_secret
	- The security code of your app

	rewards_token
	- This is used as a key to allow your app to send rewards

	address
	- Target number

	promo
	- Promo to be sent 

	transaction_id
	- This is the identifier of the transaction being checked (this is part of the response of the Rewards API)
