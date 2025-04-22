require('dotenv').config({path: __dirname+'/./../../.env'});

module.exports = {
	domain: process.env.APP_DOMAIN,
    port: process.env.APP_PORT || 8445,
    https:true,
    ssl: {
        key: process.env.SSL_KEY_PATH || null,
        cert: process.env.SSL_CERT_PATH || ''
    }
};