import http from "../http-common";

class customerDataService {
	register(data) {
	    return http.post("/auth/register", data);
	  }

	  getProducts() {
	    return http.get(`/products`);
	  }

	  create(data) {
	    return http.post("/tutorials", data);
	  }

	  update(id, data) {
	    return http.put(`/tutorials/${id}`, data);
	  }

	  delete(id) {
	    return http.delete(`/tutorials/${id}`);
	  }

	  deleteAll() {
	    return http.delete(`/tutorials`);
	  }

	  findByTitle(title) {
	    return http.get(`/tutorials?title=${title}`);
	  }
}

export default new customerDataService();
