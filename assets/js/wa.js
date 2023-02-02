curl -i -X POST `
  https://graph.facebook.com/v14.0/102691355955089/messages `
  -H 'Authorization: Bearer EAAFmyg9Ni4EBAJPQIbIksCED7HIZBeMxZCwoGiV0D9WGlGoutH6d5TDrdWxeHa1BomRdDd5P4j8CpGZBXKRBSnsL6MZAB2g8TFSsOD61wYT20hw9lF7dZB5LZCsfZBhS6IaQpkw1Ea6xY7nOvZA431B3yiiiCILpIer8rdhl2YGXZBwZCM9G1MuiwNkyuZCu45ZBql6eIzEcdJlgrAZDZD' `
  -H 'Content-Type: application/json' `
  -d '{ \"messaging_product\": \"whatsapp\", \"to\": \"6285156033706\", \"type\": \"template\", \"template\": { \"name\": \"hello_world\", \"language\": { \"code\": \"en_US\" } } }'