# Stage 1: Build React application
FROM node:alpine as build

WORKDIR /app

# Copy package.json
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy the rest of the application code
COPY . .

# Build the React app
RUN npm run build

# Stage 2: Serve React application using Nginx
FROM nginx:alpine

# Copy built React app from the previous stage
COPY --from=build /app/build /usr/share/nginx/html

# Expose port 80 to outside
EXPOSE 80

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]

