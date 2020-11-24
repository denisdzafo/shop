import axios from "axios";

export default axios.create({
  baseURL: `${process.env.MIX_APP_URL}/api/v1`,
  headers: {
    "Content-type": "application/json",
    "Access-Control-Allow-Origin": "*",
    'Accept': 'application/json'
  }
});