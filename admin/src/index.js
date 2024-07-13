import { createRoot } from "@wordpress/element";
import { Button } from "@wordpress/components";

const App = () => {
  return (
    <div>
      <h1>Custom Admin Page</h1>
      <Button variant="primary" className="button-default">
        Primary Click
      </Button>
    </div>
  );
};

createRoot(document.getElementById("admin-page")).render(<App />);
